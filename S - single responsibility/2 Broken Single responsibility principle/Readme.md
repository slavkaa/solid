# Single responsibility principle is broken

User class provide
 - user data structure
 - user data storing realization
 - logging realization
 - auth realization
 
 Any time you need to update logging realization, you need to change User class.
 Any time you need to update data storing realization, you need to change User class.
 Any time you need to update auth realization, you need to change User class.
 Any time you need to update user data structure, you need to change User class. (This is OK btw)
 