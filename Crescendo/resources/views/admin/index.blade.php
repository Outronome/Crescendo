<div style="display: flex; height: 100vh; background-color: #f3f4f6;">
    {{-- Sidebar --}}
    <aside style="width: 256px; background-color: #1f2937; color: white; padding: 1rem; display: flex; flex-direction: column;">
        <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem; text-align: center;">Admin Panel</h2>
        <nav>
            <a href="{{ route('admin.index') }}" style="display: block; padding: 0.5rem 1rem; border-radius: 0.375rem; background-color: #374151; text-decoration: none; color: white; margin-bottom: 0.5rem;">🏠 Dashboard</a>
            <a href="{{ route('admin.register') }}" style="display: block; padding: 0.5rem 1rem; border-radius: 0.375rem; background-color: transparent; text-decoration: none; color: white; margin-bottom: 0.5rem;">👤 Register Admin</a>
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               style="display: block; padding: 0.5rem 1rem; border-radius: 0.375rem; background-color: transparent; text-decoration: none; color: white; margin-bottom: 0.5rem;">
               🚪 Logout
            </a>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </aside>

    {{-- Main Content --}}
    <main style="flex: 1; padding: 1.5rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #e5e7eb; padding-bottom: 1rem;">
            <h1 style="font-size: 2rem; font-weight: 700;">Dashboard</h1>
            <p style="color: #4b5563;">Welcome, {{ auth()->user()->name }}!</p>
        </div>

        {{-- Dashboard Cards --}}
        <div style="display: grid; grid-template-columns: repeat(1, 1fr); gap: 1.5rem; margin-top: 1.5rem;">
            <div style="background-color: #3b82f6; color: white; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 1.25rem;">Total Users</h2>
                <p style="font-size: 2rem; font-weight: 700;">1,234</p>
            </div>
            <div style="background-color: #10b981; color: white; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 1.25rem;">New Registrations</h2>
                <p style="font-size: 2rem; font-weight: 700;">56</p>
            </div>
            <div style="background-color: #f59e0b; color: white; padding: 1rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 1.25rem;">Pending Verifications</h2>
                <p style="font-size: 2rem; font-weight: 700;">12</p>
            </div>
        </div>

        {{-- Recent Users Table --}}
        <div style="margin-top: 2rem;">
            <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem;">Recent Users</h2>
            <div style="overflow-x: auto; background-color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.5rem;">
                <table style="min-width: 100%; border: 1px solid #e5e7eb;">
                    <thead style="background-color: #f3f4f6;">
                        <tr>
                            <th style="padding: 0.5rem 1rem; text-align: left;">Name</th>
                            <th style="padding: 0.5rem 1rem; text-align: left;">Email</th>
                            <th style="padding: 0.5rem 1rem; text-align: left;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-top: 1px solid #e5e7eb;">
                            <td style="padding: 0.5rem 1rem;">John Doe</td>
                            <td style="padding: 0.5rem 1rem;">john@example.com</td>
                            <td style="padding: 0.5rem 1rem;">
                                <span style="padding: 0.25rem 0.5rem; font-size: 0.875rem; font-weight: 600; background-color: #bbf7d0; color: #16a34a; border-radius: 0.375rem;">
                                    Active
                                </span>
                            </td>
                        </tr>
                        <tr style="border-top: 1px solid #e5e7eb;">
                            <td style="padding: 0.5rem 1rem;">Jane Smith</td>
                            <td style="padding: 0.5rem 1rem;">jane@example.com</td>
                            <td style="padding: 0.5rem 1rem;">
                                <span style="padding: 0.25rem 0.5rem; font-size: 0.875rem; font-weight: 600; background-color: #fef3c7; color: #d97706; border-radius: 0.375rem;">
                                    Pending
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>