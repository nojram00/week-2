<x-main-layout>
    <div class="p-10">
        <h1>Dev Page</h1>

        <p class="mt-10 text-justify" style="text-indent: 2em;">
            This is the development documentation page. Here, you can find information about the development process, guidelines, and best practices for this project. Please refer to the official documentation for more details and updates.
        </p>

        <div class="flex flex-col gap-10 mt-10">
            <div class="flex flex-col gap-5">
                <h2>Development Guidelines</h2>
                <p class="px-10">
                    - Follow the coding standards and best practices outlined in the documentation.<br>
                    - Ensure that all code is properly commented and documented.<br>
                    - Use version control (Git) for all code changes and updates.<br>
                    - Regularly review and test code to ensure quality and functionality.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h2>Best Practices</h2>
                <p class="px-10">
                    - Write clean, maintainable, and efficient code.<br>
                    - Keep dependencies up to date.<br>
                    - Use meaningful commit messages.<br>
                    - Collaborate with team members and seek feedback.
                </p>
            </div>

            <div class="flex flex-row gap-1 items-center justify-center mt-10">
                For more information, please refer to the official documentation or contact the development team.
            </div>

        </div>

        <h2 class="mt-10 text-2xl font-bold">API Documentation</h2>
        <p class="mt-4">
            Below is the list of available API endpoints for this project:
        </p>

        <table class="table-auto border-collapse border border-gray-300 w-full mt-6">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">Method</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Endpoint</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">GET</td>
                    <td class="border border-gray-300 px-4 py-2">/api/items</td>
                    <td class="border border-gray-300 px-4 py-2">Fetch a list of all items.</td>
                </tr>
            </tbody>
        </table>

    </div>
</x-main-layout>
