Assignment Story

// A courier company needs to keep record of the deliveries they make.
// List of attributes they need to record includes; Destination address, parcel weight, price per kilo, delivery
// method (registered, express, normal), if fragile or not. Add a job ID as the unique identifier in the database
// table.
// Display all postage items with their destination address, weight, price per kilo, delivery method and total
// cost to a display area. 
// The total cost is calculated as follows:
// (Weight * price per kilo) + 2% handling fee
// Save details of all postage items to external text files based on their delivery method. For example all
// registered, express, and normal postage items to 3 separate text files. Use appropriate formatting to make
// the list presentable. 

  Variables
   - address [string]
   - weight [double]
   - price [double]
   - delivery method (registered, express, normal) [string]
   - fragile [boolean]
   - job ID [string]
   - total cost [double]
   
  Deliverables
   - 3 seperate text files for each delivery method
   - single database table
   - MDI application
   
References
http://www.homeandlearn.co.uk/java/connect_to_a_database_using_java_code.html
http://www.herongyang.com/JDBC/Derby-Server-INERT-INTO.html
