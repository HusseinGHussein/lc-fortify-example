<x-app-layout>
    <h2>Profile</h2>

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

    @if (session('status') === 'profile-information-updated')
        <div class="mb-4 font-medium text-sm text-green-600">
            Profile Info has been updated.
        </div>
    @endif

    <form action="/user/profile-information" method="POST">
        @csrf
        @method('put')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" autofocus>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}">
        </div>

        <div>
            <button>Update Profile</button>
        </div>
    </form>

</x-app-layout>
