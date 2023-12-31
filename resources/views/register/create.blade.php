<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg-mx-auto mt-10 bg-grey-50 border border-gray-20 p-4 rounded-xl">
            <h1 class="text-left font-bold text-xl">Register!</h1>
                <form method="POST" action="/register" class="mt-10 bg-grey-50 border border-gray-200 p-4 rounded-xl">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="name"
                        >
                            Name
                        </label>

                        <input class="border border-gray-400 p-2 w-center"
                               type="text"
                               name="name"
                               id="name"
                               required
                        >

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="username"
                        >
                            Username
                        </label>

                        <input class="border border-gray-400 p-2 w-center"
                               type="text"
                               name="username"
                               id="username"
                               required
                        >

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="email"
                        >
                            Email
                        </label>

                        <input class="border border-gray-400 p-2 w-center"
                               type="email"
                               name="email"
                               id="email"
                               required
                        >



                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="password"
                        >
                            Password
                        </label>

                        <input class="border border-gray-400 p-2 w-center"
                               type="password"
                               name="password"
                               id="password"
                               required
                        >

                    </div>

                    <div class="mb-6">
                        <button type="submit"
                               class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"

                        >
                            Submit
                        </button>




                    </div>

                </form>
       </main>

    </section>

</x-layout>
