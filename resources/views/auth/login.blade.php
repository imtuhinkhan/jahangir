<x-guest-layout>
    <a href="../main/index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
        <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
        <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
    </a>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required autofocus autocomplete="username" aria-describedby="emailHelp">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
        <div class="d-flex align-items-center justify-content-center">
        </div>
    </form>
</x-guest-layout>