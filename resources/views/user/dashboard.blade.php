<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hallo! Ini Data Transaksi Kamu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-200 text-sm text-center table-auto">
                        <thead class="bg-blue-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Foto</th>
                                <th class="px-4 py-2">No Resi</th>
                                <th class="px-4 py-2 text-left">Nama Produk</th>
                                <th class="px-4 py-2">Jumlah Produk</th>
                                <th class="px-4 py-2">Total</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Keterangan</th>
                                <th class="px-4 py-2">Tanggal CO</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($transaksis as $t)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2">
                                        @if($t->detailTransaksis->first()?->product?->gambar)
                                            <img src="{{ asset('images/' . $t->detailTransaksis->first()->product->gambar) }}"
                                                 alt="foto"
                                                 class="w-12 h-12 object-cover rounded shadow-sm mx-auto">
                                        @else
                                            <span class="text-gray-400">-</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">{{ $t->no_resi ?? '-' }}</td>
                                    <td class="px-4 py-2 text-left">
                                        @foreach($t->detailTransaksis as $d)
                                            <span class="block">{{ $d->product->nama_produk ?? '-' }}</span>
                                        @endforeach
                                    </td>
                                    <td class="px-4 py-2">{{ $t->detailTransaksis->sum('qty') }} pcs</td>
                                    <td class="px-4 py-2 text-green-600 font-semibold">
                                        Rp{{ number_format($t->total, 0, ',', '.') }}
                                    </td>
                                    <td class="px-4 py-2">
                                        @php
                                            $warna = match(strtolower($t->status)) {
                                                'tertunda' => 'bg-yellow-100 text-yellow-800',
                                                'ditolak' => 'bg-red-100 text-red-700',
                                                'divalidasi' => 'bg-blue-100 text-blue-800',
                                                'dikirim' => 'bg-green-100 text-green-800',
                                                default => 'bg-gray-200 text-gray-800'
                                            };
                                        @endphp
                                        <span class="px-2 py-1 text-xs font-semibold rounded {{ $warna }}">
                                            {{ ucfirst($t->status) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2">{{ $t->metode_pembayaran ?? '-' }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($t->created_at)->format('d-m-Y H:i') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="py-4 text-gray-500">Belum ada transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table><br>
                    <a href="{{ url('/') }}" class="inline-block mb-4 px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition">
                      ← Kembali
                  </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
