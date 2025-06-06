<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payment Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body class="min-h-screen bg-gradient-to-br from-[#e6ebfa] via-white to-[#e6f7e6] flex items-center justify-center p-6">
    <div class="w-full max-w-7xl flex flex-col md:flex-row gap-6 md:gap-10">
        <!-- Payment Billing Information -->
        <section
            class="bg-white rounded-lg shadow-md p-6 w-full max-w-xs md:max-w-[280px] flex flex-col gap-6">
            <h2 class="text-sm font-semibold text-[#0a1a4f] mb-2">
                Payment Billing Information
            </h2>
            <form class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-xs font-normal text-[#0a1a4f]">Name</label>
                    <input
                        id="name"
                        type="text"
                        placeholder="Nama lengkap"
                        class="text-xs placeholder:text-[#cbd5e1] border border-[#d1d5db] rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#0a1a4f]" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phone" class="text-xs font-normal text-[#0a1a4f]">Phone Number</label>
                    <input
                        id="phone"
                        type="text"
                        placeholder="Contoh: 08xxxxxxxxxx"
                        class="text-xs placeholder:text-[#cbd5e1] border border-[#d1d5db] rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#0a1a4f]" />
                </div>
            </form>
        </section>

        <!-- Payment Metode -->
        <section
            class="bg-white rounded-lg shadow-md p-6 w-full max-w-xs md:max-w-[360px] flex flex-col gap-6">
            <h2 class="text-sm font-semibold text-[#0a1a4f] mb-2">Payment Metode</h2>
            <form class="flex flex-col gap-6">
                <!-- Credit/Debit Card -->
                <fieldset class="flex flex-col gap-2">
                    <legend class="text-xs font-normal text-[#0a1a4f] mb-1">
                        Credit/Debit Card
                    </legend>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="creditcard"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">Credit/Debit Card</span>
                    </label>
                </fieldset>

                <!-- E-Wallet -->
                <fieldset class="flex flex-col gap-2">
                    <legend class="text-xs font-normal text-[#0a1a4f] mb-1">&nbsp;</legend>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="gopay"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">GoPay</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="dana"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">DANA</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="shopeepay"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">ShopeePay</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="ovo"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">OVO</span>
                    </label>
                </fieldset>

                <!-- Bank Transfer -->
                <fieldset class="flex flex-col gap-2">
                    <legend class="text-xs font-normal text-[#0a1a4f] mb-1">Bank Transfer</legend>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="bca"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">BCA</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="bni"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">BNI</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="mandiri"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">Mandiri</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="bri"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">BRI</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="bsi"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">BSI</span>
                    </label>
                    <label
                        class="flex items-center gap-3 border border-[#d1d5db] rounded-md px-3 py-2 cursor-pointer">
                        <input
                            type="radio"
                            name="payment"
                            value="btn"
                            class="w-4 h-4 text-[#0a1a4f] border border-[#d1d5db] focus:ring-0" />
                        <span class="text-xs text-[#0a1a4f]">BTN</span>
                    </label>
                </fieldset>
            </form>
        </section>

        <!-- Purchase Detail -->
        <section
            class="bg-white rounded-lg shadow-md p-6 w-full max-w-xs md:max-w-[280px] flex flex-col gap-6">
            <h2 class="text-sm font-semibold text-[#0a1a4f] mb-2">Purchase Detail</h2>
            <div class="text-xs text-[#0a1a4f] flex flex-col gap-4">
                <div>
                    <p class="font-semibold mb-2">Top up Liturtoken</p>
                    <div class="flex justify-between mb-1">
                        <span class="font-semibold">10 Token</span>
                        <span>Rp. 25.000</span>
                    </div>
                    <div class="flex justify-between border-b border-[#d1d5db] pb-1">
                        <span class="font-semibold">PPN 11%</span>
                        <span>Rp. 2.750</span>
                    </div>
                </div>
                <div class="flex justify-between font-semibold">
                    <span>Total</span>
                    <span>Rp. 27.750</span>
                </div>
                <button
                    id="purchaseButton"
                    type="button"
                    class="bg-[#0a1a4f] text-white text-xs rounded-md py-2 w-full mt-2">
                    Purchase
                </button>
            </div>
        </section>
    </div>

    <!-- Popup Modal -->
    <div
        id="popupModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-6 max-w-sm w-full shadow-lg">
            <h3 class="text-[#0a1a4f] font-semibold text-lg mb-4">Confirm Purchase</h3>
            <p class="text-sm text-[#0a1a4f] mb-6">
                Are you sure you want to proceed with the purchase?
            </p>
            <div class="flex justify-end gap-4">
                <button
                    id="cancelBtn"
                    class="px-4 py-2 rounded-md border border-gray-300 text-[#0a1a4f] hover:bg-gray-100 transition">
                    Cancel
                </button>
                <form action="{{ route('accpayment') }}" method="POST">
    @csrf
    <button
        type="submit"
        id="confirmBtn"
        class="bg-[#0a1a4f] text-white px-4 py-2 rounded-md hover:bg-[#08153a] transition">
        Confirm
    </button>
</form>

            </div>
        </div>
    </div>

    <script>
        const purchaseButton = document.getElementById('purchaseButton');
        const popupModal = document.getElementById('popupModal');
        const cancelBtn = document.getElementById('cancelBtn');
        const confirmBtn = document.getElementById('confirmBtn');

        // Tampilkan popup saat tombol Purchase diklik
        purchaseButton.addEventListener('click', () => {
            popupModal.classList.remove('hidden');
        });

        // Tutup popup saat Cancel diklik
        cancelBtn.addEventListener('click', () => {
            popupModal.classList.add('hidden');
        });

        // Contoh aksi saat Confirm diklik (bisa ganti sesuai kebutuhan)
        confirmBtn.addEventListener('click', () => {
            popupModal.classList.add('hidden');
            alert('Purchase confirmed! Processing your payment...');
            // Bisa tambahkan submit form atau redirect ke halaman sukses di sini
        });

        // Tutup popup kalau klik di luar konten modal
        popupModal.addEventListener('click', (e) => {
            if (e.target === popupModal) {
                popupModal.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
        