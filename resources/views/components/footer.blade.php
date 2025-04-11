<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Footer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <footer class="bg-sky-950 text-gray-400 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                <!-- Logo & About -->
                <div class="md:col-span-1">
                    <div class="flex items-center mb-4">
                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 19L12 4L21 19H3Z" stroke="white" stroke-width="2" />
                        </svg>
                        <span class="text-white font-bold uppercase">COLORLIB.COM</span>
                    </div>
                    <p class="text-sm mb-4">
                        A small river named Duden flows by their place and supplies it with the necessary regelialia.
                    </p>
                    <a href="#" class="text-sm text-white hover:text-gray-300 inline-block">
                        read more →
                    </a>
                </div>

                <!-- Discover Column -->
                <div>
                    <h3 class="text-white font-medium mb-4">Discover</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Buy & Sell</a></li>
                        <li><a href="#" class="hover:text-white">Merchant</a></li>
                        <li><a href="#" class="hover:text-white">Giving back</a></li>
                        <li><a href="#" class="hover:text-white">Help & Support</a></li>
                    </ul>
                </div>

                <!-- About Column -->
                <div>
                    <h3 class="text-white font-medium mb-4">About</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Staff</a></li>
                        <li><a href="{{Route('team')}}" class="hover:text-white">Team</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                    </ul>
                </div>

                <!-- Resources Column -->
                <div>
                    <h3 class="text-white font-medium mb-4">Resources</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Security</a></li>
                        <li><a href="#" class="hover:text-white">Global</a></li>
                        <li><a href="#" class="hover:text-white">Charts</a></li>
                        <li><a href="#" class="hover:text-white">Privacy</a></li>
                    </ul>
                </div>

                <!-- Social Column -->
                <div>
                    <h3 class="text-white font-medium mb-4">Social</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Facebook</a></li>
                        <li><a href="#" class="hover:text-white">Twitter</a></li>
                        <li><a href="#" class="hover:text-white">Instagram</a></li>
                        <li><a href="#" class="hover:text-white">Googleplus</a></li>
                    </ul>
                </div>
            </div>

          

            <!-- Copyright Section -->
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-xs">
                        Copyright ©2024 All rights reserved | This template is made with ♥ by 
                        <a href="#" class="text-white hover:text-gray-300">Colorlib.com</a>
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-xs hover:text-white">Terms</a>
                    <a href="#" class="text-xs hover:text-white">Privacy</a>
                    <a href="#" class="text-xs hover:text-white">Compliances</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>