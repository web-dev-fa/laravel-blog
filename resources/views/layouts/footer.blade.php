
<footer class="bg-white dark:bg-gray-800 mt-20">
    <div class="mx-auto w-full max-w-screen-xl item center px-6">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-2">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Pages</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-small">
                <li class="mb-4">
                    <a href="/" class=" hover:underline">Home</a>
                </li>
                <li class="mb-4">
                    <a href="/blog" class="hover:underline">Blog</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('register') }}" class="hover:underline">Register</a>
                </li>
            </ul>
        </div>