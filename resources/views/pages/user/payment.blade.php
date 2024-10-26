<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout - Complete Your Purchase</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Simple Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-800 text-lg">Company</span>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500">Need Help?</span>
                    <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Contact Support</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Checkout Section -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Payment Form -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Payment Details</h2>

                <!-- Progress Steps -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <span
                            class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">1</span>
                        <span class="ml-2 text-sm font-medium">Details</span>
                    </div>
                    <div class="flex-1 h-1 mx-4 bg-blue-200"></div>
                    <div class="flex items-center">
                        <span
                            class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">2</span>
                        <span class="ml-2 text-sm font-medium">Payment</span>
                    </div>
                    <div class="flex-1 h-1 mx-4 bg-gray-200"></div>
                    <div class="flex items-center">
                        <span
                            class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center">3</span>
                        <span class="ml-2 text-sm font-medium">Confirm</span>
                    </div>
                </div>

                <form class="space-y-6">
                    <!-- Card Information -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Card Information</label>
                        <div class="rounded-md border border-gray-300 px-3 py-2 shadow-sm">
                            <div class="mb-4">
                                <input type="text" placeholder="Card number"
                                    class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" />
                            </div>
                            <div class="flex space-x-4">
                                <input type="text" placeholder="MM / YY"
                                    class="block w-1/2 border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" />
                                <input type="text" placeholder="CVC"
                                    class="block w-1/2 border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" />
                            </div>
                        </div>
                    </div>

                    <!-- Billing Information -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Billing Information</h3>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Street Address</label>
                                <input type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                                    <input type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Country</label>
                                <select
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-900">
                            I agree to the
                            <a href="#" class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
                            and
                            <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                        <span class="mr-2">Pay Now</span>
                        <span class="font-medium">$29.00</span>
                    </button>
                </form>

                <!-- Security Notice -->
                <div class="mt-6 flex items-center justify-center text-sm text-gray-500">
                    <span class="mr-2">🔒</span>
                    Secured by industry-leading encryption
                </div>
            </div>

            <!-- Order Summary -->
            <div class="bg-gray-50">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Order Summary</h2>

                    <!-- Selected Plan -->
                    <div class="bg-gray-50 rounded-lg p-4 mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium">Pro Plan</span>
                            <span class="text-blue-600 font-medium">$29.00/month</span>
                        </div>
                        <p class="text-sm text-gray-600">Access to all Pro features and priority support</p>
                    </div>

                    <!-- Price Breakdown -->
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span>$29.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax</span>
                            <span>$2.90</span>
                        </div>
                        <div class="border-t pt-3 mt-3">
                            <div class="flex justify-between font-medium">
                                <span>Total</span>
                                <span>$31.90</span>
                            </div>
                        </div>
                    </div>

                    <!-- Promo Code -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Promo Code</label>
                        <div class="flex space-x-2">
                            <input type="text"
                                class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2">
                            <button
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition duration-300">
                                Apply
                            </button>
                        </div>
                    </div>

                    <!-- Money Back Guarantee -->
                    <div class="mt-6 bg-blue-50 rounded-lg p-4">
                        <div class="flex items-center">
                            <span class="text-2xl mr-3">✨</span>
                            <div>
                                <h3 class="font-medium text-blue-900">30-Day Money Back Guarantee</h3>
                                <p class="text-sm text-blue-700">Not satisfied? Get a full refund within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="mt-6">
                    <div class="flex items-center justify-center space-x-4">
                        <span class="text-gray-400 text-sm">Secure payment with</span>
                        <div class="flex space-x-2">
                            <span class="text-2xl">💳</span>
                            <span class="text-2xl">🏦</span>
                            <span class="text-2xl">📱</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>