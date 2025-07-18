<x-layout pageTitle="Home">
    <!-- App Shell -->
    <div class="min-h-screen flex flex-col">
      <!-- Header -->


      <!-- Sidebar + Content -->
      <div class="flex flex-1 overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r hidden lg:block">
          <div class="p-6">
            <nav class="space-y-2">
              <a href="#" class="block py-2 px-4 rounded hover:bg-indigo-50 text-indigo-700 font-semibold">Overview</a>
              <a href="#" class="block py-2 px-4 rounded hover:bg-indigo-50 text-gray-600">Settings</a>
              <a href="#" class="block py-2 px-4 rounded hover:bg-indigo-50 text-gray-600">Billing</a>
              <a href="#" class="block py-2 px-4 rounded hover:bg-indigo-50 text-gray-600">Notifications</a>
            </nav>
          </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
          <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h2>

            <!-- Example Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                <p class="text-2xl font-bold text-indigo-600">2,481</p>
              </div>
              <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-lg font-semibold mb-2">Active Projects</h3>
                <p class="text-2xl font-bold text-indigo-600">58</p>
              </div>
              <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-lg font-semibold mb-2">New Tickets</h3>
                <p class="text-2xl font-bold text-indigo-600">16</p>
              </div>
            </div>

            <!-- More content placeholder -->
            <div class="mt-10 bg-white shadow rounded-lg p-6">
              <h4 class="text-xl font-semibold mb-4">Recent Activity</h4>
              <ul class="divide-y divide-gray-200">
                <li class="py-3">User <strong>Jane</strong> updated project <em>Analytics</em>.</li>
                <li class="py-3">New user <strong>Ahmed</strong> registered.</li>
                <li class="py-3">Invoice #122 was paid.</li>
              </ul>
            </div>
          </div>
        </main>
      </div>

      <!-- Footer -->
      <footer class="bg-white border-t py-4 text-center text-sm text-gray-500">
        &copy; 2025 MyApp. All rights reserved.
      </footer>
    </div>

</x-layout>