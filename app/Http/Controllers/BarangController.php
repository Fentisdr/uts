use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

public function index()
{
    $barangs = Barang::with('satuan')->get();
    $satuans = Satuan::all();
    return view('list', compact('barangs', 'satuans'));
}

public function create()
{
    $satuans = Satuan::all();
    return view('create', compact('satuans'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'kode_barang' => 'required|unique:barangs,kode_barang',
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'deskripsi_barang' => 'nullable',
        'satuan_id' => 'required|exists:satuan,id',
    ]);

    Barang::create($validatedData);

    return redirect()->route('barang.index');
}

public function edit(Barang $barang)
{
    $satuans = Satuan::all();
    return view('edit', compact('barang', 'satuans'));
}

public function update(Request $request, Barang $barang)
{
    $validatedData = $request->validate([
        'kode_barang' => 'required|unique:barangs,kode_barang,'.$barang->id,
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'deskripsi_barang' => 'nullable',
        'satuan_id' => 'required|exists:satuan,id',
    ]);

    $barang->update($validatedData);

    return redirect()->route('barang.index');
}

public function destroy(Barang $barang)
{
    $barang->delete();

    return redirect()->route('barang.index');
}
