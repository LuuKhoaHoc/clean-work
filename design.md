# CLEAN WORK: Design of classes

This project is object-orientedly design in order to improve readability and understandability. This is because OOP allow code to be represented systematically.
For that reason, the system is separated in to these classes below:

- Customer: contain info of customer, including his/her name and email or phone number(for contact) and the list of order
- Manager: hold methods to control the cleaning process from waiting to finished by manipulating *Order, Team, Payment* class
- Order: Contain data of customer's need, including the customer, his/her address (for the cleaning team), type of service they need, comment and the state of the order.
- Team: contain infomation of cleaning employees, the correspoding order. There are also methods to update emplyees' status.
- Payment: contain datas of costing table, total cost, customer and discount.
- Admin: contains method to extract data from database into array, these method should have parameter for data filter.

## Mindset

The mindset is to separate front-end php files from back-end ones. That means:

- FE PHP files contain mostly HTML codes and some PHP tags for **include/require/use at the header & represent data onto UI by variables or loop**
- BE PHP file only contain PHP code to process datas from database or UI's form 
- If any data from database would go into UI, it must be first extract into an array, and then that array is called in the UI