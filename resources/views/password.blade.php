<x-app-layout>
    <h2>Update password</h2>

    @if ($errors->any())
        <div>
            <div>Something went wrong!</div>

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status') === 'password-updated')
        <div class="mb-4 font-medium text-sm text-green-600">
            Password has been updated.
        </div>
    @endif

    <form action="/user/password" method="POST">
        @csrf
        @method('put')

        <div>
            <label for="current_password">Password</label>
            <input type="password" id="current_password" name="current_password">
        </div>

        <div>
            <label for="password">New Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <button>Update Password</button>
        </div>
    </form>

</x-app-layout>
