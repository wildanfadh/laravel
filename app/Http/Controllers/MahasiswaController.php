<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\DaftarMahasiswa;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    // Function untuk DB:Facade

    // public function index() {
    //     return "Berhasil di proses";
    // }

    // public function insertSql() {
    // 	$result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk)
    // 				VALUES ('19003036','Sari Citra Lestari', '2001-12-31',3.5)");
    // 	dump($result);
    // }

    // public function insertTimestamp() {
    // 	$result = DB::insert(
    // 		"INSERT INTO mahasiswas
    // 		(nim, nama, tanggal_lahir, ipk, created_at, updated_at)
    // 		VALUES
    // 		('19002032','Rina Kumala Sari','2000-06-28',3.4,now(),now())"
    // 	);
    // 	dump($result);

    // }

    // public function insertPrepared() {
    // 	$result = DB::insert(
    // 		"INSERT INTO mahasiswas
    // 		(nim, nama, tanggal_lahir, ipk, created_at, updated_at)
    // 		VALUES (?,?,?,?,?,?)",
    // 		['18012012','James Situmorang','1999-04-02',3.4,now(),now()]
    // 	);
    // 	dump($result);
    // }

    // public function insertBinding() {
    // 	$result = DB::insert(
    // 		"INSERT INTO mahasiswas
    // 		(nim, nama, tanggal_lahir, ipk, created_at, updated_at)
    // 		VALUES (:nim,:nama,:tgl,:ipk,:created,:updated)",
    // 		[
    // 			'nim' => '19005011',
    // 			'nama' => 'Riana Putria',
    // 			'tgl' => '2000-11-23',
    // 			'ipk' => 2.7,
    // 			'created' => now(),
    // 			'updated' => now(),
    // 		]
    // 	);
    // 	dump($result);
    // }

    // public function update() {
    // 	$result = DB::update(
    // 		"UPDATE mahasiswas SET created_at = now(), updated_at = now() 
    // 		WHERE nim = ?",['19003036']);
    // 	dump($result);

    // }

    //  public function delete() {
    // 	$result = DB::delete(
    // 		"DELETE FROM mahasiswas 
    // 		WHERE nama = ?",['James Situmorang']);
    // 	dump($result);

    // }

    //  public function select() {
    // 	$result = DB::select("SELECT * FROM mahasiswas");
    // 	dump($result);

    // }

    // public function selectTampil() {
    // 	$result = DB::select("SELECT * FROM mahasiswas");

    // 	echo($result[0]->id). '<br>';
    // 	echo($result[0]->nim). '<br>';
    // 	echo($result[0]->nama). '<br>';
    // 	echo($result[0]->tanggal_lahir). '<br>';
    // 	echo($result[0]->ipk);
    // }

    // public function selectView() {
    // 	$result = DB::select('SELECT * FROM mahasiswas');
    // 	return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    // }

    // public function selectWhere() {
    // 	$result = DB::select('SELECT * FROM mahasiswas WHERE ipk > ? ORDER BY nama ASC ',[3]);
    // 	return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    // }

    // public function statement() {
    // 	$result = DB::statement('TRUNCATE mahasiswas');
    // 	return('Tabel mahasiswas sudah dikosongkan');
    // }



    // function untuk Query Builder


    // public function insert() {
    // 	$result = DB::table('mahasiswas')->insert(
    // 		[
    // 			'nim' => '19003036',
    // 			'nama' => 'Sari Citra Lestari',
    // 			'tanggal_lahir' => '2001-12-31',
    // 			'ipk' => 3.5,
    // 			'created_at' => now(),
    // 			'updated_at' => now(),
    // 		]
    // 	);
    // 	dump($result);
    // }

    // public function insertBanyak() {
    // 	$result = DB::table('mahasiswas')->insert(
    // 	[
    // 		[
    // 			'nim' => '19002032',
    // 			'nama' => 'Rina Kumala Sari',
    // 			'tanggal_lahir' => '2000-06-28',
    // 			'ipk' => 3.4,
    // 			'created_at' => now(),
    // 			'updated_at' => now(),
    // 		],
    // 		[
    // 			'nim' => '18012012',
    // 			'nama' => 'James Situmorong',
    // 			'tanggal_lahir' => '1999-04-02',
    // 			'ipk' => 2.7,
    // 			'created_at' => now(),
    // 			'updated_at' => now(),
    // 		],
    // 	]
    // 	);
    // 	dump($result);
    // }

    // public function update() {
    // 	$result = DB::table('mahasiswas')
    // 		->where('nama','Sari Citra Lestari')
    // 		->update(
    // 			[
    // 				'tanggal_lahir' => '2002-01-01',
    // 				'ipk' => 3.19,
    // 				'updated_at' => now(),
    // 			]
    // 		);
    // 		dump($result);
    // }

    // public function updateWhere() {
    // 	$result = DB::table('mahasiswas')
    // 		->where('ipk','<',3)
    // 		->where('nama','<>','alex')
    // 		->update(
    // 			[
    // 				'tanggal_lahir' => '2002-01-01',
    // 				'updated_at' => now(),
    // 			]
    // 		);
    // 		dump($result);
    // }

    // public function updateOrInsert() {
    // 	$result = DB::table('mahasiswas')->updateOrInsert(
    // 		[
    // 			'nim' => '19005011',
    // 		],
    // 		[
    // 			'nama' => 'Riana Putria',
    // 			'tanggal_lahir' => '2000-11-23',
    // 			'ipk' => 2.7,
    // 			'created_at' => now(),
    // 			'updated_at' => now(),
    // 		]
    // 	);
    // 	dump($result);
    // }

    // public function delete() {
    // 	$result = DB::table('mahasiswas')
    // 		->where('ipk','>=',3.4)
    // 		->delete();

    // 		dump($result);
    // }

    // public function get() {
    // 	$result = DB::table('mahasiswas')->get();

    // 	dump($result);
    // }

    // public function getTampil() {
    // 	$result  = DB::table('mahasiswas')->get();

    // 	echo($result[0]->id). '<br>';
    // 	echo($result[0]->nim). '<br>';
    // 	echo($result[0]->nama). '<br>';
    // 	echo($result[0]->tanggal_lahir). '<br>';
    // 	echo($result[0]->ipk);
    // }

    // public function getView() {
    // 	$result = DB::table('mahasiswas')->get();
    // 	return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    // }

    // public function getWhere() {
    // 	$result = DB::table('mahasiswas')
    // 		->where('ipk','<','3')
    // 		->orderBy('nama', 'desc')
    // 		->get();

    // 		return view('tampil-mahasiswa',['mahasiswas' => $result]);
    // }

    // public function select() {
    // 	$result = DB::table('mahasiswas')
    // 		->select('nim', 'nama as nama_mahasiswa')
    // 		->get();

    // 		dump($result);
    // }

    // public function take() {
    // 	$result = DB::table('mahasiswas')
    // 		->orderBy('nama', 'asc')->skip(1)->take(2)->get();
    // 		return view('tampil-mahasiswa',['mahasiswas' => $result]);
    // }

    // public function first() {
    // 	$result = DB::table('mahasiswas')
    // 		->where('nama','James Situmorang')->first();
    // 	return view('tampil-mahasiswa',['mahasiswas' => [$result]]);
    // }

    // public function find() {
    // 	$result = DB::table('mahasiswas')->find(5);
    // 	return view('tampil-mahasiswa',['mahasiswas' => [$result]]);
    // }

    // public function raw() {
    // 	$result = DB::table('mahasiswas')
    // 		->selectRaw('count(*) as total_mahasiswa')
    // 		->get();

    // 		echo($result[0]->total_mahasiswa). '<br>';
    // }

    // Mini Case Study Query Builder
    // public function index() {
    // 	$result = DB::table('mahasiswas')->select('nim','nama')->get();
    // 	return view('index-mahasiswa', ['mahasiswas' => $result]);
    // }

    // public function mahasiswa($nim) {
    //     $result = DB::table('mahasiswas')->where('nim',$nim)->get();
    //     return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    // }


    // Function untuk Eloquent ORM
    // public function cekObject(){
    //     $mahasiswa = new Mahasiswa;

    //     dump($mahasiswa);
    // }

    // public function insert(){
    //     $mahasiswa = new Mahasiswa;
    //     $mahasiswa->nim = '19003036';
    //     $mahasiswa->nama = 'Sari Citra Lestari';
    //     $mahasiswa->tanggal_lahir = '2001-12-31';
    //     $mahasiswa->ipk = 3.5;
    //     $mahasiswa->save();

    //     dump($mahasiswa);
    // }

    // public function massAssignment(){
    //     Mahasiswa::create(
    //         [
    //             'nim' => '19021044',
    //             'nama' => 'Rudi Permana',
    //             'tanggal_lahir' => '200-08-22',
    //             'ipk' => 2.5,
    //         ]
    //     );
    //     return "Berhasil di Proses";
    // }

    // public function massAssignment2(){
    //     $mahasiswa1 = Mahasiswa::create(
    //         [
    //             'nim' => '19002032',
    //             'nama' => 'Rina Kumala Sari',
    //             'tanggal_lahir' => '2000-06-28',
    //             'ipk' => 3.4,
    //         ]
    //     );
    //     dump($mahasiswa1);

    //     $mahasiswa2 = Mahasiswa::create(
    //         [
    //             'nim' => '18012012',
    //             'nama' => 'James Situmorang',
    //             'tanggal_lahir' => '1999-04-12',
    //             'ipk' => 2.7,
    //         ]
    //     );
    //     dump($mahasiswa2);

    //     $mahasiswa3 = Mahasiswa::create(
    //         [
    //             'nim' => '19005011',
    //             'nama' => 'Riana Putria',
    //             'tanggal_lahir' => '2000-11-23',
    //             'ipk' => 2.9,
    //         ]
    //     );
    //     dump($mahasiswa3);
    // }

    // public function update(){
    //     $mahasiswa = Mahasiswa::find(1);
    //     $mahasiswa->tanggal_lahir = '2000-01-01';
    //     $mahasiswa->ipk = 2.9;
    //     $mahasiswa->save();

    //     dump($mahasiswa);
    // }

    // public function updateWhere(){
    //     $mahasiswa = Mahasiswa::where('nim','19003036')->first();
    //     $mahasiswa->tanggal_lahir = '2001-12-31';
    //     $mahasiswa->ipk = 4.0;
    //     $mahasiswa->save();

    //     dump($mahasiswa);
    // }

    // public function massUpdate(){
    //     Mahasiswa::where('nim','19003036')->first()->update(
    //         [
    //             'tanggal_lahir' => '2000-04-20',
    //             'ipk' => 2.1
    //         ]
    //         );
    //         return "Berhasil di Proses";
    // }

    // public function delete(){
    //     $mahasiswa = Mahasiswa::find(1);
    //     $mahasiswa->delete();

    //     dump($mahasiswa);
    // }

    // public function destroy(){
    //     $mahasiswa = Mahasiswa::destroy(1);
    //     dump($mahasiswa);
    // }

    // public function massDelete(){
    //     $mahasiswa = Mahasiswa::where('ipk','>',2)->delete();
    //     dump($mahasiswa);
    // }

    // public function all(){
    //     $result = Mahasiswa::all();

    // dump($result);

    // echo($result[0]->id).'<br>';
    // echo($result[0]->nim).'<br>';
    // echo($result[0]->nama).'<br>';
    // echo($result[0]->tanggal_lahir).'<br>';
    // echo($result[0]->ipk).'<br>';

    //     foreach ($result as $mahasiswa) {
    //         echo($mahasiswa->id).'<br>';
    //         echo($mahasiswa->nim).'<br>';
    //         echo($mahasiswa->nama).'<br>';
    //         echo($mahasiswa->tanggal_lahir).'<br>';
    //         echo($mahasiswa->ipk).'<br>';
    //         echo "<hr>";
    //     }
    // }

    // public function allView()
    // {
    //     $mahasiswas = Mahasiswa::all();
    //     return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    // }

    // public function getWhere()
    // {
    //     $mahasiswas = Mahasiswa::where('ipk','<','3')
    //     ->orderBy('nama', 'desc')
    //     ->get();
    //     return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    // }

    // public function testWhere()
    // {
    //     $mahasiswa = Mahasiswa::where('nim', '18012012')->get();
    //     dump($mahasiswa);
    // }

    // public function first()
    // {
    //     // $mahasiswa = Mahasiswa::where('nim','18012012')->first();
    //     $mahasiswa = Mahasiswa::where('ipk','<','3')->first();
    //     // dump($mahasiswa);
    //     return view('tampil-mahasiswa',['mahasiswas' => [$mahasiswa]]);
    // }

    // public function find()
    // {
    //     $mahasiswa = Mahasiswa::find(8);
    //     return view('tampil-mahasiswa', ['mahasiswas' => [$mahasiswa]]);
    // }

    // public function latest()
    // {
    //     // $mahasiswa = Mahasiswa::latest()->get();
    //     $mahasiswa = Mahasiswa::latest()->limit(2)->get();
    //     return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswa]);
    // }

    // public function skipTake()
    // {
    //     $mahasiswa = Mahasiswa::orderBy('ipk')->skip(1)->take(3)->get();
    //     return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswa]);
    // }

    // public function softDelete()
    // {
    //     Mahasiswa::where('nim','18012012')->delete();
    //     return "Berhasil di hapus";
    // }

    // public function withTrashed()
    // {
    //     $mahasiswas = Mahasiswa::withTrashed()->get();
    //     return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    // }

    // public function restore()
    // {
    //     Mahasiswa::withTrashed()->where('nim','18012012')->restore();
    //     return "Berhasil di restore";
    // }

    // public function forceDelete()
    // {
    //     Mahasiswa::where('nim','19005011')->forceDelete();
    //     return "Berhasil di hapus secara permanent";
    // }



    // Function untuk Form Validation

    // public function index()
    // {
    //     return view('form-pendaftaran');
    // }

    // public function prosesForm(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'nim' => 'required|size:8',
    //         'nama' => 'required|min:3|max:50',
    //         'email' => 'required|email',
    //         'jenis_kelamin' => 'required|in:P,L',
    //         'jurusan' => 'required',
    //         'alamat' => '',
    //     ]);

    //     dump($validateData);

    //     echo $validateData['nim'];             echo "<br>";
    //     echo $validateData['nama'];            echo "<br>";
    //     echo $validateData['email'];           echo "<br>";
    //     echo $validateData['jenis_kelamin'];   echo "<br>";
    //     echo $validateData['jurusan'];         echo "<br>";
    //     echo $validateData['alamat'];          
    // }

    // public function prosesFormValidator(Request $request)
    // {
    //     $rules = [
    //         'nim'           => 'required|size:8',
    //         'nama'          => 'required|min:3|max:50',
    //         'email'         => 'required|email',
    //         'jenis_kelamin' => 'required|in:P,L',
    //         'alamat'        => '',
    //     ];

    //     $error_message = [
    //         'required'  => ':attribute wajib diisi.',
    //         'size'      => ':attribute harus berukuran :size  karakter.',
    //         'max'       => ':attribute maksimal berisi :max karakter.',
    //         'min'       => ':attribute minimal berisi :min karakter',
    //         'email'     => ':attribute harus diisi dengan alamat email yang valid',
    //         'in'        => ':attribute yang dipilih tidak valid.',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $error_message);

    //     if ($validator->fails()) {
    //         return redirect('/')->withErrors($validator)->withInput();
    //     } else {
    //         echo $request->nim;            echo "<br>";
    //         echo $request->nama;           echo "<br>";
    //         echo $request->email;          echo "<br>";
    //         echo $request->jenis_kelamin;  echo "<br>";
    //         echo $request->jurusan;        echo "<br>";
    //         echo $request->alamat;         echo "<br>";
    //     }
    // }

    // public function prosesFormRequest(DaftarMahasiswa $request)
    // {
    //     $validateData = $request->validated();
    //     dump($validateData);
    // }


    // Function untuk Localization

    public function formPendaftaran($locale = 'id')
    {
        App::setlocale($locale);
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:8',
            'nama'          => 'required|min:3|max:50',
            'email'         => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat'        => '',
        ]);
        dump($validateData);
    }
}
