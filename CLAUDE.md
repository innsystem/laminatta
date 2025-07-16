# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 10 business management system (Sistema de Gerenciamento Empresarial) with a public website and administrative panel. The system manages services, portfolios, customers, invoices, transactions, and integrations with payment gateways.

## Common Development Commands

### Development Environment
```bash
# Start development server
php artisan serve

# Install dependencies
composer install
npm install

# Build assets for development
npm run dev

# Build assets for production
npm run build

# Storage link
php artisan storage:link

# Clear all caches
php artisan optimize:clear
```

### Database Commands
```bash
# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Seed database
php artisan db:seed

# Fresh migration with seed
php artisan migrate:fresh --seed
```

### Code Quality & Testing
```bash
# Run PHP linter (Laravel Pint)
./vendor/bin/pint

# Run tests
php artisan test
```

### Custom Commands
```bash
# Generate CRUD with custom command
php artisan make:crud Posts Admin Postagem --columns="title:string:unique,content:text:nullable,status:select_status:default:1"

# Clear application logs
php artisan logs:clear
```

## Code Architecture

### MVC Structure
The application follows a structured MVC pattern with additional layers:

- **Controllers**: Organized by area (Admin, Api, Site)
- **Models**: Eloquent models with relationships and scopes
- **Services**: Business logic layer for complex operations
- **Middleware**: Custom permission-based access control
- **Integrations**: External service integrations (payment gateways, APIs)

### Key Directories
```
app/
├── Console/Commands/        # Custom Artisan commands (MakeCrud)
├── Http/Controllers/
│   ├── Admin/              # Admin panel controllers
│   ├── Api/                # RESTful API controllers
│   └── Site/               # Public site controllers
├── Http/Middleware/        # Custom middleware (CheckPermission)
├── Integrations/           # External service integrations
├── Models/                 # Eloquent models
├── Services/               # Business logic services
└── Jobs/                   # Queue jobs for background processing
```

### Authentication & Authorization
- **Authentication**: Custom login system with password recovery
- **Authorization**: Role-based permissions with groups
- **Middleware**: `CheckPermission` for granular access control
- **API Auth**: Laravel Sanctum for API authentication

### Database Architecture
The system uses a multi-tenant approach with these key entities:

- **Users/Customers**: Unified user system with groups
- **Services**: Business services offered
- **UserServices**: User-service relationships with billing
- **Invoices/InvoiceItems**: Billing system
- **Transactions**: Financial transaction records
- **Integrations**: External service configurations
- **Permissions**: Granular access control

### Frontend Architecture
- **Public Site**: Blade templates with custom CSS/JS
- **Admin Panel**: Dashboard template with AJAX-based data loading
- **Assets**: Vite for asset compilation
- **Styles**: Custom CSS with Bootstrap integration

### API Design
- **RESTful**: Standard REST endpoints for all entities
- **Route Organization**: Custom routes before apiResource to prevent conflicts
- **Response Format**: JSON with consistent error handling
- **Validation**: Form request validation with custom messages

### Custom Features

#### CRUD Generator
The `make:crud` command generates complete CRUD operations:
- Model with fillable fields
- Migration with column types
- Admin controller with validation
- API controller with resources
- Service layer methods
- Blade views with forms
- Route definitions

#### Permission System
- Group-based permissions
- Middleware route protection
- Dynamic permission checking
- Admin interface for permission management

#### Integration System
- Configurable payment gateways
- Webhook processing
- Background job processing
- Extensible for new integrations

## Development Workflow

### Adding New Features
1. Use `make:crud` command for standard CRUD operations
2. Implement service layer for complex business logic
3. Add API endpoints following existing patterns
4. Include permission checks in routes
5. Test both admin and API functionality

### Database Changes
1. Create migration files following Laravel conventions
2. Update model fillable arrays and relationships
3. Add validation rules to controllers
4. Update seeders if needed

### Integration Development
1. Create integration class in `app/Integrations/`
2. Add configuration in database integrations table
3. Implement webhook handlers
4. Add background job processing if needed

## Code Standards

### Laravel Conventions
- PSR-4 autoloading
- Eloquent model conventions
- Resource controller methods
- Form request validation

### File Organization
- Controllers organized by area (Admin/Api/Site)
- Services match model names
- Views organized by controller structure
- Middleware registered in Kernel.php

### Naming Conventions
- Models: Singular (User, Invoice)
- Controllers: Plural with Controller suffix
- Services: Singular with Service suffix
- Routes: Kebab-case with dots for nesting

## Testing

### Database Testing
- Use factories for model creation
- Seed test data appropriately
- Test both positive and negative scenarios

### API Testing
- Test all CRUD operations
- Verify authentication requirements
- Test validation rules
- Check response formats

### Integration Testing
- Test webhook handling
- Verify payment processing
- Test background job execution