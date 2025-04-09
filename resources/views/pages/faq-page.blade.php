<x-main-layout>
    <div class="p-10">
        <h1>FAQ</h1>

        <div class="flex flex-col gap-10 mt-10">
            <div class="flex flex-col gap-5">
                <h2>Q: <span>What is OnlyPaws?</span></h2>
                <p class="px-10">
                    A: OnlyPaws is an online pet store that offers a wide range of pet products, including food, toys, and accessories.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h2>Q: <span>How to avail products?</span></h2>
                <p class="px-10">
                    A: To avail products, simply browse our website, select the items you want, and add them to your cart. Once you're ready, proceed to checkout and follow the instructions to complete your order.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h2>Q: <span>What payment methods do you accept?</span></h2>
                <p class="px-10">
                    A: We accept various payment methods, including credit/debit cards, PayPal, and bank transfers. Please check our payment options during checkout for more details.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h2>Q: <span>How can I track my order?</span></h2>
                <p class="px-10">
                    A: Once your order has been shipped, you will receive a tracking number via email. You can use this number to track your order on our website or the shipping carrier's website.
                </p>
            </div>

            <div class="flex flex-row gap-1 items-center justify-center mt-10">
                More Questions?

                <a href="{{ route('contacts') }}" class="text-blue-400 hover:underline">Contact Us</a>
            </div>
        </div>
    </div>
</x-main-layout>