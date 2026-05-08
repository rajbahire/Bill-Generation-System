CREATE DATABASE college_bill_system;

USE college_bill_system;

-- ===============================
-- HOD USERS TABLE
-- ===============================

CREATE TABLE hod_users
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(100) UNIQUE NOT NULL,

    password VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===============================
-- TEACHERS TABLE
-- ===============================

CREATE TABLE teachers
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(100) UNIQUE NOT NULL,

    department VARCHAR(100) NOT NULL,

    phone VARCHAR(20) NOT NULL,

    password VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===============================
-- STUDENTS TABLE
-- ===============================

CREATE TABLE students
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(100) UNIQUE NOT NULL,

    department VARCHAR(100) NOT NULL,

    phone VARCHAR(20) NOT NULL,

    password VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===============================
-- DEFAULT HOD LOGIN
-- Email: hod@gcea.ac.in
-- Password: admin123
-- ===============================

INSERT INTO hod_users
(
    name,
    email,
    password
)

VALUES
(
    'HOD Admin',

    'hod@gcea.ac.in',

    '$2y$10$GDC0zDbZDUHFeaqVDFycye2RcBEp1I1zkRo3Ox/Vc2.HkdEs2k4Da'
);

-- ===============================
-- HOD Dashboard
-- ===============================

CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
);

-- Insert dummy data for testing
INSERT INTO `bills` (`teacher_name`, `amount`, `status`, `created_at`) VALUES
('Dr. John Doe', 7500.00, 'pending', '2026-04-20'),
('Prof. Jane Smith', 6000.00, 'approved', '2026-04-19'),
('Dr. Mike Johnson', 8500.00, 'rejected', '2026-04-18');