<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern Landing Page with Pricing</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div class="flex items-center py-4">
                        <span class="font-semibold text-gray-800 text-lg">Company</span>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="#" class="py-4 px-2 text-gray-500 hover:text-gray-900">Home</a>
                    <a href="#" class="py-4 px-2 text-gray-500 hover:text-gray-900">About</a>
                    <a href="#" class="py-4 px-2 text-gray-500 hover:text-gray-900">Services</a>
                    <a href="#pricing" class="py-4 px-2 text-gray-500 hover:text-gray-900">Pricing</a>
                    <a href="#" class="py-4 px-2 text-gray-500 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="max-w-6xl mx-auto px-4 py-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Welcome to Our Platform
                </h1>
                <p class="mt-6 text-xl text-gray-100">
                    Create something amazing with our innovative solutions
                </p>
                <div class="mt-10">
                    <a href="#pricing"
                        class="bg-white text-blue-600 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition duration-300">
                        View Pricing
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Our Features
                </h2>
                <p class="mt-4 text-gray-500">
                    Everything you need to succeed in one place
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <a href="https://example.com/feature1" class="bg-gray-50 p-6 rounded-lg block">
                    <div
                        class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl mb-4">
                        ★
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Feature One</h3>
                    <p class="mt-2 text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </a>
                <!-- Feature 2 -->
                <a href="https://example.com/feature2" class="bg-gray-50 p-6 rounded-lg block">
                    <div
                        class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white text-2xl mb-4">
                        ◆
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Feature Two</h3>
                    <p class="mt-2 text-gray-500">
                        Sed do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>
                </a>
                <!-- Feature 3 -->
                <a href="https://example.com/feature3" class="bg-gray-50 p-6 rounded-lg block">
                    <div
                        class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white text-2xl mb-4">
                        ♦
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Feature Three</h3>
                    <p class="mt-2 text-gray-500">
                        Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </a>
            </div>
        </div>
    </div>


    <!-- Pricing Section -->
    <div id="pricing" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Choose Your Plan
                </h2>
                <p class="mt-4 text-gray-500">
                    Select the perfect plan for your needs
                </p>
            </div>
            <div class="flex flex-wrap justify-center space-x-4">
                <!-- Basic Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-semibold text-gray-900 text-center">Basic</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold">$9</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="ml-3">Basic Feature 1</span>
                            </li>
                            <!-- Features here -->
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('user.payment', ['user' => $user->id]) }}"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 text-center block">
                                Go to Payment
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-blue-500 w-80">
                    <div class="px-6 py-8">
                        <div class="text-center">
                            <span
                                class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">POPULAR</span>
                        </div>
                        <h3 class="mt-4 text-2xl font-semibold text-gray-900 text-center">Pro</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold">$29</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="ml-3">Everything in Basic</span>
                            </li>
                            <!-- More features -->
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('user.payment', ['user' => $user->id]) }}"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 text-center block">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-semibold text-gray-900 text-center">Enterprise</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold">$99</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="ml-3">Everything in Pro</span>
                            </li>
                            <!-- More features -->
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('user.payment', ['user' => $user->id]) }}"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 text-center block">
                                Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Section -->
    <div class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-gray-50 rounded-lg shadow-xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 text-center">
                        Get in Touch
                    </h2>
                    <form class="mt-8 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Plan Interest</label>
                            <select
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                                <option>Basic Plan ($9/month)</option>
                                <option>Pro Plan ($29/month)</option>
                                <option>Enterprise Plan ($99/month)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Methods Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900">Secure Payment Methods</h2>
                <div class="mt-8 flex justify-center space-x-8">
                    <!-- Payment Icons -->
                    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-lg shadow-sm">
                        <span class="text-2xl">💳</span>
                    </div>
                    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-lg shadow-sm">
                        <span class="text-2xl">🏦</span>
                    </div>
                    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-lg shadow-sm">
                        <span class="text-2xl">📱</span>
                    </div>
                </div>
                <p class="mt-4 text-gray-600">We accept all major credit cards, bank transfers,
                    and digital payments</p>
            </div>
        </div>
    </div>

    <!-- Footer with Additional Payment Info -->
    <footer class="bg-gray-800 text-gray-300">
        <div class="max-w-6xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white">Refund Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Help Center</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                        <li><a href="#" class="hover:text-white">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Secure Payments</h3>
                    <p class="text-sm">Your payment information is processed securely. We do not
                        store credit card details.</p>
                    <div class="mt-4 flex space-x-4">
                        <span class="text-2xl">🔒</span>
                        <span class="text-2xl">✓</span>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; 2024 Company. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>