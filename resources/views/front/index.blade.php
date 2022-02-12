@extends('layouts.base')

@section('content')
  <div class="wrapper max-width mx-auto  h-full">
    <div class="flex items-center justify-center pt-5 md:pt-10">
      <div class="w-full py-5 px-5 bg-white rounded-md">
        <h1 class="text-center font-semibold text-2xl">Pendaftaran Anggota</h1>
        <p class="text-center text-lg mb-3">Organisasi Unyu-unyu</p>
        <div class="pt-2">
          <label for="name"  class="text-sm font-light mb-2">Nama Lengkap<sup class="sup">*</sup></label>
          <input type="text" class="w-full py-2 px-3 border rounded-lg" placeholder="Nama Lengkap" name="name" autofocus required>
        </div>
        <div class="pt-2">
          <label for="name"  class="text-sm font-light mb-2">Email<sup class="sup">*</sup></label>
          <input type="email" class="w-full py-2 px-3 border rounded-lg" placeholder="Email" name="email" required>
        </div>
        <div class="pt-2">
          <label for="name"  class="text-sm font-light mb-2">WhatsApp<sup class="sup">*</sup> </label>
          <div class="flex items-center">
            <div class="mr-3 pl-2">+62</div>
            <input type="text" class="w-full py-2 px-3 border rounded-lg" placeholder="81234567890" name="whatsapp" required>
          </div>
        </div>
        <div class="pt-2">
          <label for="name"  class="text-sm font-light mb-2">Tanggal Lahir<sup class="sup">*</sup> </label>
          <input type="date" class="w-full py-2 px-3 border rounded-lg" placeholder="Tanggal Lahir" value="2000-01-01" required>
        </div>
        <div class="mt-3"></div>
        <button class="w-full rounded-md bg-button-primary text-white py-3 font-bold text-lg">Kirim</button>
      </div>
    </div>
  </div>
@endsection