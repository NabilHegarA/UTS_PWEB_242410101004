<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $users = [
            'admin' => [
                'password' => 'admin123',
                'nama' => 'Admin HookPoint',
                'telepon' => '08123456789',
                'role' => 'admin'
            ],
            'user' => [
                'password' => 'user123',
                'nama' => 'Nabil Hegar',
                'telepon' => '08987654321',
                'role' => 'user'
            ]
        ];

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        if (isset($users[$username]) && $users[$username]['password'] == $password) {

            session([
                'user' => [
                    'username' => $username,
                    'nama' => $users[$username]['nama'],
                    'telepon' => $users[$username]['telepon'],
                    'role' => $users[$username]['role'],
                    'password' => $password
                ]
            ]);

            return redirect('/dashboard?username=' . $username);
        }

        return back()->with('error', 'Username atau Password Salah');
    }

    public function landing()
    {
        $lapaks = $this->getDataLapak();
        return view('landing-page', compact('lapaks'));
    }

    public function register()
    {
        return view('register');
    }

    public function prosesRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'telepon.required' => 'No telepon wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        session([
            'user' => [
                'username' => $request->username,
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'role' => 'user',
                'password' => $request->password
            ]
        ]);

        return redirect('/dashboard?username=' . $request->username);
    }

    public function dashboard(Request $request)
    {
        $username = $request->username ?? null;
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->username;

        $users = [
            'admin' => [
                'password' => 'admin123',
                'nama' => 'Admin HookPoint',
                'telepon' => '08123456789',
                'role' => 'admin'
            ],
            'user' => [
                'password' => 'user123',
                'nama' => 'Nabil Hegar',
                'telepon' => '08987654321',
                'role' => 'user'
            ]
        ];

        $user = $users[$username] ?? null;

        return view('profile', compact('user', 'username'));
    }

    public function lapak(Request $request)
    {
        $lapaks = $this->getDataLapak();

        if ($request->filled('search')) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                $keyword = strtolower($request->search);

                return str_contains(strtolower($lapak['nama']), $keyword)
                    || str_contains(strtolower($lapak['jenis']), $keyword);
            });
        }

        if ($request->jenis) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                return strtolower($lapak['jenis']) == strtolower($request->jenis);
            });
        }

        if ($request->status) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                return strtolower($lapak['status']) == strtolower($request->status);
            });
        }

        return view('lapak', compact('lapaks'));
    }

    public function pengelolaan(Request $request)
    {
        $lapaks = $this->getDataLapak();

        if ($request->filled('search')) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                $keyword = strtolower($request->search);

                return str_contains(strtolower($lapak['nama']), $keyword)
                    || str_contains(strtolower($lapak['jenis']), $keyword);
            });
        }

        if ($request->jenis) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                return strtolower($lapak['jenis']) == strtolower($request->jenis);
            });
        }

        if ($request->status) {
            $lapaks = array_filter($lapaks, function ($lapak) use ($request) {
                return strtolower($lapak['status']) == strtolower($request->status);
            });
        }

        return view('pengelolaan', compact('lapaks'));
    }

    private function getDataLapak()
    {
        return [
            [
                'nama' => 'Lapak A1',
                'jenis' => 'Lele',
                'harga' => 80000,
                'deskripsi' => 'Kolam lele dengan suasana tenang, cocok untuk pemancing santai.',
                'status' => 'available',
                'gambar' => 'kolam-lele.png'
            ],
            [
                'nama' => 'Lapak B1',
                'jenis' => 'Nila',
                'harga' => 80000,
                'deskripsi' => 'Pemandangan luas dengan ikan nila berkualitas dan mudah dipancing.',
                'status' => 'available',
                'gambar' => 'kolam-nila.png'
            ],
            [
                'nama' => 'Lapak C1',
                'jenis' => 'Gurame',
                'harga' => 80000,
                'deskripsi' => 'Kolam gurame dengan ukuran ikan besar, cocok untuk tantangan.',
                'status' => 'unavailable',
                'gambar' => 'kolam-gurame.png'
            ],
            [
                'nama' => 'Lapak D1',
                'jenis' => 'Patin',
                'harga' => 80000,
                'deskripsi' => 'Area luas dengan ikan patin aktif, cocok untuk pengalaman seru.',
                'status' => 'available',
                'gambar' => 'kolam-patin.png'
            ],
            [
                'nama' => 'Lapak A2',
                'jenis' => 'Lele',
                'harga' => 120000,
                'deskripsi' => 'Kolam lele dengan suasana tenang, cocok untuk pemancing santai.',
                'status' => 'available',
                'gambar' => 'kolam-lele.png'
            ],
            [
                'nama' => 'Lapak B2',
                'jenis' => 'Nila',
                'harga' => 120000,
                'deskripsi' => 'Pemandangan luas dengan ikan nila berkualitas dan mudah dipancing.',
                'status' => 'available',
                'gambar' => 'kolam-nila.png'
            ],
            [
                'nama' => 'Lapak C2',
                'jenis' => 'Gurame',
                'harga' => 120000,
                'deskripsi' => 'Kolam gurame dengan ukuran ikan besar, cocok untuk tantangan.',
                'status' => 'available',
                'gambar' => 'kolam-gurame.png'
            ],
            [
                'nama' => 'Lapak D2',
                'jenis' => 'Patin',
                'harga' => 120000,
                'deskripsi' => 'Area luas dengan ikan patin aktif, cocok untuk pengalaman seru.',
                'status' => 'unavailable',
                'gambar' => 'kolam-patin.png'
            ],
            [
                'nama' => 'Lapak A3',
                'jenis' => 'Lele',
                'harga' => 150000,
                'deskripsi' => 'Kolam lele dengan suasana tenang, cocok untuk pemancing santai.',
                'status' => 'unavailable',
                'gambar' => 'kolam-lele.png'
            ],
            [
                'nama' => 'Lapak B3',
                'jenis' => 'Nila',
                'harga' => 150000,
                'deskripsi' => 'Pemandangan luas dengan ikan nila berkualitas dan mudah dipancing.',
                'status' => 'available',
                'gambar' => 'kolam-nila.png'
            ],
            [
                'nama' => 'Lapak C3',
                'jenis' => 'Gurame',
                'harga' => 150000,
                'deskripsi' => 'Kolam gurame dengan ukuran ikan besar, cocok untuk tantangan.',
                'status' => 'available',
                'gambar' => 'kolam-gurame.png'
            ],
            [
                'nama' => 'Lapak D3',
                'jenis' => 'Patin',
                'harga' => 150000,
                'deskripsi' => 'Area luas dengan ikan patin aktif, cocok untuk pengalaman seru.',
                'status' => 'available',
                'gambar' => 'kolam-patin.png'
            ],
            [
                'nama' => 'Lapak A4',
                'jenis' => 'Lele',
                'harga' => 180000,
                'deskripsi' => 'Kolam lele dengan suasana tenang, cocok untuk pemancing santai.',
                'status' => 'available',
                'gambar' => 'kolam-lele.png'
            ],
            [
                'nama' => 'Lapak B4',
                'jenis' => 'Nila',
                'harga' => 180000,
                'deskripsi' => 'Pemandangan luas dengan ikan nila berkualitas dan mudah dipancing.',
                'status' => 'available',
                'gambar' => 'kolam-nila.png'
            ],
            [
                'nama' => 'Lapak C4',
                'jenis' => 'Gurame',
                'harga' => 180000,
                'deskripsi' => 'Kolam gurame dengan ukuran ikan besar, cocok untuk tantangan.',
                'status' => 'unavailable',
                'gambar' => 'kolam-gurame.png'
            ],
            [
                'nama' => 'Lapak D4',
                'jenis' => 'Patin',
                'harga' => 180000,
                'deskripsi' => 'Area luas dengan ikan patin aktif, cocok untuk pengalaman seru.',
                'status' => 'available',
                'gambar' => 'kolam-patin.png'
            ],
            [
                'nama' => 'Lapak A5',
                'jenis' => 'Lele',
                'harga' => 200000,
                'deskripsi' => 'Kolam lele dengan suasana tenang, cocok untuk pemancing santai.',
                'status' => 'available',
                'gambar' => 'kolam-lele.png'
            ],
            [
                'nama' => 'Lapak B5',
                'jenis' => 'Nila',
                'harga' => 200000,
                'deskripsi' => 'Pemandangan luas dengan ikan nila berkualitas dan mudah dipancing.',
                'status' => 'unavailable',
                'gambar' => 'kolam-nila.png'
            ],
            [
                'nama' => 'Lapak C5',
                'jenis' => 'Gurame',
                'harga' => 200000,
                'deskripsi' => 'Kolam gurame dengan ukuran ikan besar, cocok untuk tantangan.',
                'status' => 'available',
                'gambar' => 'kolam-gurame.png'
            ],
            [
                'nama' => 'Lapak D5',
                'jenis' => 'Patin',
                'harga' => 200000,
                'deskripsi' => 'Area luas dengan ikan patin aktif, cocok untuk pengalaman seru.',
                'status' => 'available',
                'gambar' => 'kolam-patin.png'
            ],
        ];
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/landing-page');
    }
}
