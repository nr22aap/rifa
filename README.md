# 🏥 Hospital Management System (HMS)

A full-stack hospital management solution developed using **PHP, MySQL, and Bootstrap**, designed to streamline hospital workflows, enhance data security, and support medical staff in managing day-to-day operations. This was my final year project at the **University of Hertfordshire**, and I received a **78% (First Class Honours)** grade.


 🔑 Key Features
 🔐 Role-Based Access Control
- **Admin Panel**: Full control over patient records, employee/staff management, inventory, pharmacy, finances, and system data.
- **Doctor Panel**: View assigned patient profiles, update diagnoses, and manage prescriptions and medical reports.

📋 Patient Records Management
- Add, edit, and manage secure patient records.
- Maintain diagnosis histories, prescriptions, test results, and treatment notes.

💊 Pharmacy & Inventory Management
- Track available medicines, equipment, and suppliers.
- Maintain stock levels with alerts to prevent stockouts or overstocking.

 💰 Financial Reporting
- View and manage income, expenses, payroll, and account summaries.
- Generate reports for administrative and accounting purposes.

🌐 Accessible, Responsive UI
- Built using Bootstrap with a clean, mobile-friendly layout.
- Follows **WCAG accessibility guidelines** for usability across devices.

---

## 🛠️ Tech Stack

| Layer        | Technologies/Tools                              |
|--------------|--------------------------------------------------|
| Frontend     | HTML, CSS, Bootstrap                            |
| Backend      | PHP (Procedural)                                |
| Database     | MySQL                                           |
| Development  | XAMPP, phpMyAdmin                               |
| Security     | Session handling, input validation/sanitization |

---

## 📁 Project Structure

fyp_hms/
├── admin/ # Admin dashboard and management tools
├── doctor/ # Doctor panel and patient interfaces
├── includes/ # Reusable PHP functions, DB configs
├── assets/ # CSS, JS files, and images
├── login.php # Login gateway
├── index.php # Landing page
└── README.md # Project documentation



## 🔒 Security Features

- Session validation and logout handling
- Input sanitization to prevent SQL injection
- Role-based page access and privilege control

## 📈 Learning Outcomes

- Designed and implemented a **modular hospital management platform**
- Strengthened skills in **backend logic, SQL optimization, and full-stack integration**
- Gained hands-on experience in **secure database handling** and **healthcare-related system design**
- Applied accessibility, usability, and scalability considerations in a real-world context

---

## 🚀 Future Improvements

- Appointment scheduling system for patients and doctors  
- Role-based interfaces for receptionists and lab staff  
- Email/SMS notification system  
- Patient self-registration module  


## 🙋‍♀️ About Me

**Nuzhat Tasnim Rifa**  
🎓 BSc (Hons) Computer Science (Software Engineering), University of Hertfordshire  
📬 nuzhatrifa24@gmail.com  

If you found this project helpful or would like to collaborate, feel free to **star**, **fork**, or **connect** with me!

## 🧪 How to Run This Project

1. **Requirements**
   - XAMPP (or any Apache + MySQL stack)
   - Web browser
   - Code editor (e.g., VS Code)

2. **Setup Instructions**
   - Download or clone this repository into your `htdocs` folder:
     git clone <your-repo-link> C:\xampp\htdocs\fyp_hms
    
   - Start **Apache** and **MySQL** from XAMPP Control Panel.
   - Open `phpMyAdmin` and import the provided SQL database (e.g., `hms.sql`).
   - Update database connection settings inside `includes/db_config.php` if needed.
   - Open your browser and navigate to:
     http://localhost/fyp_hms/


3. **Default Credentials**
   - Admin Login: hms_admin / admin123
   - Doctor Login: doctor_1 / 123

> 📌 Make sure your XAMPP is running and the database is correctly imported before accessing the system.


## 💬 Let's Connect

📎 LinkedIn: https://www.linkedin.com/in/nuzhatrifa/  
💼 Open to roles in software engineering, backend development, and digital health innovation.

---

⭐ *Thanks for visiting!*
