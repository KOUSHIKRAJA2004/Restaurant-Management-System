# Restaurant-Management-System

A complete restaurant management system built with **PHP**, **MySQL**, **HTML5**, **CSS3**, and **JavaScript**. This project enables both customers and staff to manage restaurant activities efficiently.

---

## 🔧 Built With

- **Frontend**: HTML5, CSS3, JavaScript  
- **Backend**: PHP 7.4  
- **Database**: MySQL

---

## ✨ Features

### 👥 Customer Side (`customerSide/`)
- Make table reservations
- Register and log in
- View profile and points

### 🧑‍🍳 Staff/Admin Side (`adminSide/`)
- Take and manage customer orders
- Send orders to the kitchen
- Handle payments and print receipts
- Perform full CRUD operations
- Track user preferences
- Generate reports and download data
- View analytics via charts and graphs

---

## ▶️ Run Locally (Using XAMPP & NetBeans)

1. **Start Services**  
   Open **XAMPP** and start **Apache** and **MySQL**.

2. **Create NetBeans Project**  
   - Open **NetBeans**
   - Create a new PHP project named `RestaurantProject`
   - Choose **PHP Application** > **Local Web Site** as Run Configuration

3. **Set Up Files**  
   - Delete `setup_completed.flag` from the extracted project
   - Copy all contents from `RestaurantProject-main` (`adminSide`, `customerSide`, `index.php`, `restaurantDB.txt`) into the `Source Files` directory

4. **Database Setup**  
   - Ensure **no existing database** named `restaurantdb`
   - Use the SQL in `restaurantDB.txt` to create the database manually via **phpMyAdmin**

5. **Run the Project**  
   - Launch the application in your local browser via NetBeans

---

## 📌 Notes

- Compatible with **PHP 7.4**
- Make sure your Apache and MySQL servers are running before launching the app
- Customize design and database fields as needed for real-world deployment

---

## 📄 License

This project is open-source and intended for academic or personal use.

