# CLEAN WORK: Design of classees

This project is object-orientedly design in order to improve readability and understandability. This is because OOP allow code to be represented systematically.
For that reason, the system is separated in to these classes below:

- Customer
- Manager
- Order
- Team
- Payment
- Admin: contains method to extract data from database into array, these method should have parameter for data filter.

## Mindset

1. The mindset is to separate front-end php files from back-end ones. That means:

- FE PHP files contain mostly HTML codes and some PHP tags for **include/require/use at the header & represent data onto UI by variables or loop**
- BE PHP file only contain PHP code to process datas from database or UI's form 
- If any data from database would go into UI, it must be first extract into an array, and then that array is called in the UI
