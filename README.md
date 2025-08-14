- **🏫 Staff Management System (SMS)**
   - A comprehensive web application for university staff operations
      
  🌟 Overview
  
  - The Staff Management System (SMS) is a robust web application designed to streamline administrative workflows in university environments.
   It integrates appointment scheduling, ticketing, IT support, and staff management into a unified platform.

  🔑 Key Features
  
  -  Feature	Description	Key Files
    
       - 📅 Appointment Management
            -Schedule and manage staff appointments with forms and forums.
            -(appform.php, cappform.php)
       - 🎫 Ticket System
            Track and resolve support requests via an organized inbox.
            (ticket inbox, support.php)
       - 💻 IT Support
            Dedicated portal for IT-related queries and issue resolution.
         	(IT contact, IT.js)
       - 🔐 User Authentication
            Secure login/logout functionality for staff access control.
            (loginpage.php, logout.php, process_log.php)
       - 📚 Knowledge Base
            Centralized repository for staff resources and documentation.
            (know.php, abt.php)
       - 📝 Administrative Forms
            Dynamic forms for exams, staff data, and operations.
         	(form.php, exam.php, insert.php)
     
 🛠️ Technical Stack
 
  - Backend
    
       - PHP (Primary server-side logic):
       - config.php (System configurations)
       - insert.php (Database operations)
       - header.php (Shared templates)
       - Hack (Specialized components)

  - Frontend
    
       - HTML/CSS: Responsive interfaces (home.html, loginpage.html).
       - JavaScript: Client-side interactivity (IT.js, abt.js).

- **Server Requirements:**
      - PHP 7.4+
      - MySQL/MariaDB
      - Apache/Nginx
