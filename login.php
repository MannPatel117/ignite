<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE | LOGIN</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon/favicon.png">
</head>

<body>
    <section>
        <div class="flex min-h-screen overflow-hidden">
            <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="w-full max-w-xl mx-auto lg:w-96">
                    <div>
                        <a href="/" class="text-blue-600 text-medium">Welcome :D</a>
                        <h2 class="mt-6 text-3xl font-extrabold text-neutral-600"> Login </h2>
                    </div>
                    <div class="mt-8">
                        <div class="mt-6">
                            <form action="api/login.php" method="POST" class="space-y-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-neutral-600"> Email address
                                    </label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" required=""
                                            placeholder="Your Email" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      text-neutral-600
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label for="password" class="block text-sm font-medium text-neutral-600"> Password
                                    </label>
                                    <div class="mt-1">
                                        <input id="password" name="pass" type="password"
                                            autocomplete="current-password" required="" placeholder="Your Password"
                                            class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      text-neutral-600
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                                    </div>
                                </div>
                                
                                <div>
                                <button id="login" type="submit" class="
                    flex
                    items-center
                    justify-center
                    w-full
                    px-10
                    py-4
                    text-base
                    font-medium
                    text-center text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    bg-blue-600
                    rounded-xl
                    hover:bg-blue-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-blue-500
                  "> Sign in </button>
                                </div>
                            </form>
                            <div class="relative my-4">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white text-neutral-600"> Or </span>
                                </div>
                            </div>
                            <div>
                            <a href="routes/register.php">   <button type="submit" class="
                                    w-full
                                    items-center
                                    block
                                    px-10
                                    py-3.5
                                    text-base
                                    font-medium
                                    text-center text-blue-600
                                    transition
                                    duration-500
                                    ease-in-out
                                    transform
                                    border-2 border-white
                                    shadow-md
                                    rounded-xl
                                    focus:outline-none
                                    focus:ring-2
                                    focus:ring-offset-2
                                    focus:ring-gray-500
                                    ">
                                    <div class="flex items-center justify-center">
                                        
                                        <span class="ml-4"> Register</span>
                                    </div>
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex-1 hidden w-0 overflow-hidden lg:block">
                <img class="absolute inset-0 object-cover w-full h-full"
                    src="assets/login/login-page.png"
                    alt="">
            </div>
        </div>
    </section>
</body>

</html>