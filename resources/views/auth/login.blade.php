
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 px-6 py-10">

        <div class="w-full max-w-5xl bg-white rounded-[35px] shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

            <!-- LEFT SIDE -->
            <div class="bg-gradient-to-br from-blue-700 to-indigo-800 text-white p-12 flex flex-col justify-center">

                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Welcome Back 👋
                </h1>

                <p class="text-blue-100 text-lg mb-10">
                    Manage blogs, jobs, admit cards and results from your admin dashboard.
                </p>

                <div class="space-y-6">

                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-4 rounded-2xl text-2xl">
                            📝
                        </div>

                        <div>
                            <h3 class="font-bold text-xl">
                                Blog Management
                            </h3>

                            <p class="text-blue-100">
                                Create and update posts instantly.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-4 rounded-2xl text-2xl">
                            🚀
                        </div>

                        <div>
                            <h3 class="font-bold text-xl">
                                Career Updates
                            </h3>

                            <p class="text-blue-100">
                                Publish latest job notifications.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-4 rounded-2xl text-2xl">
                            🔒
                        </div>

                        <div>
                            <h3 class="font-bold text-xl">
                                Secure Admin Access
                            </h3>

                            <p class="text-blue-100">
                                Protected and persistent login system.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="p-10 md:p-14 flex flex-col justify-center">

                <div class="text-center mb-10">

                    <div class="text-6xl mb-4">
                        🔐
                    </div>

                    <h2 class="text-4xl font-bold text-gray-800">
                        Admin Login
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Sign in to continue
                    </p>

                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input
                            id="email"
                            class="block mt-2 w-full rounded-2xl border-gray-300 focus:ring-2 focus:ring-blue-500"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input
                            id="password"
                            class="block mt-2 w-full rounded-2xl border-gray-300 focus:ring-2 focus:ring-blue-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between">

                        <label for="remember_me" class="inline-flex items-center">
                            <input
                                id="remember_me"
                                type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember"
                            >

                            <span class="ms-2 text-sm text-gray-600">
                                Remember me
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                class="text-sm text-blue-600 hover:underline"
                                href="{{ route('password.request') }}"
                            >
                                Forgot password?
                            </a>
                        @endif

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:scale-105 transition duration-300 text-white font-bold py-4 rounded-2xl shadow-xl"
                    >
                        Log In →
                    </button>

                </form>

            </div>

        </div>

    </div>

