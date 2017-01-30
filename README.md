# Laundrapp Top Secret Laundrone Program

![Top Secret Prototype Drone](/drone.jpg)

Your mission if you choose to accept it is to implement a flight management system for the top secret Laundrone project. The project will allow us to use drones to pick up and deliver laundry across the globe.

Our first attempt at this program didn't quite go to plan due to timezone issues and miscalculations in the flight range of our drones. We will provide you with our prototype drone so you can avoid the mistakes we made. Much resource went towards the R&D of our Drone so if you could clean her up and integrate into the new drone fleet, that would be much appreciated.

We require at least two drones for this program to work effectively. The first drone to cover short distances (up to 100 miles), and the second drone for trans-continental flights (up to 1500 miles). You are free to add more classes of drones.

## Requirements

The flight management system must be a command line application and allow us to do the following:

### Add a drone flight

  - Input a starting latitude and longitude
  - Input a starting timezone (UTC time offset)
  - Input a destination latitude and longitude
  - Input a destination timezone (UTC time offset)
  - Show the drone(s) which can complete the given flight based on fuel (or warn if no drone can)
    - Choose from list of drones to complete the flight
  - Show flight summary (departure time, flight distance, flight duration, arrival time)
  
#### Example of flight summary screen

The flight summary screen must show all the information below but can be displayed in any format.
| Departure Time    | Flight Distance | Flight Duration | Arrival Time      |
| ----------------- | --------------- | --------------- | ----------------- |
| 14:45 (UTC+02:00) | 1448 miles      | 3:32            | 03:17 (UTC-11:00) |

### Show existing flights

There must be functionality to view existing flights within the system. we must be able to see all of the information below in the table. You can use this table layout if you wish but what ever format you decide to use, all the information below must be displayed in one form or another.

| Drone                 | Departure Location | Departure Time    | Distance   | Duration | Arrival Location | Arrival Time      | Progress | Remaining Fuel |
| --------------------- | ------------------ | ----------------- | ---------- | -------- | ---------------- | ----------------- | -------- | -------------- |
| PrototypeDrone        | 51.8860, 0.2388    | 15:15 (UTC+00:00) | 57 miles   | 1:33     | 52.2105, -0.9929 | 23:48 (UTC+07:00) | 74%      | 53%            |
| TransContinentalDrone | 51.8860, 0.2388    | 17:55 (UTC+02:00) | 1247 miles | 7:19     | 48.0760, 27.7834 | 03:14 (UTC-04:00) | 100%     | 22%            |

## Technical Requirements

 - The system will be tested on a PHP 7.0 Ubuntu environment. We will accomodate installation of any default packages that are available via `apt-get`.
 - The system must either be a long running process or have some form of data persistance. This is so that the existing flights section keeps track of flight progress and remaining fuel.
 - If you wish to use a database of some sort, we will allow for the following: `MySQL`, `PostreSQL`, `Sqlite`, and `MongoDB`. Flat file implementations are also allowed in any data format.

## Scenario Assumptions

The following assumptions can be made when creating the system.
 - The flight departure times are always the current time that the flight was added
 - All distances and speeds are to be in miles
 - Coordinate distance calculations do not need to take into account the curvature of the earth
 - Flight Summary
   - Departure time and arrival time must be in the local time of the locations
 - Existing flights
   - Progress and Remaining Fuel need to be updated every time the section is viewed
 
All data presented in the above tables are for illustrative purposes only and should not be used to validate your implementation.

# Summary

Remember you will be competing with alternative solutions from Boeing, and Space X so make sure your solution is robust and does the job. Please also take the time to explain your system, what technologies are required to support it, and instructions on how to run the system.