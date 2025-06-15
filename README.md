# Laravel Interview Project
This is a Laravel-based interview project that includes the following features:
- ✅ Blog System with Dark Mode Toggle and Responsive Design
- ✅ User Management (Admin/User roles)
- ✅ Product and Order Management (E-commerce Schema)
- ✅ Integration with External API (JSONPlaceholder Users)
##  Requirements
- PHP ^8.2 or higher
- Composer
- MySQL 
- Node.js and npm
- Laravel 12
## 🚀 Installation & Setup
Follow these steps to run the project locally:
### 1. Clone the Repository
git clone https://github.com/mranandrm/Tasks.git
cd Tasks
2. Install PHP Dependencies
composer install
3. Install Frontend Dependencies
npm install && npm run dev
4. Create Environment File
cp .env.example .env
Update the .env file with your local DB credentials.
5. Generate Application Key
php artisan key:generate
6. Run Migrations and Seeders
php artisan migrate –seed

7. Blog Seeder
php artisan db:seed --class=BlogSeeder
7. Start Development Server
php artisan serve
Visit: http://localhost:8000
