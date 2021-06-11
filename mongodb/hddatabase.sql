/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MongoDB
 Source Server Version : 30409
 Source Host           : localhost:27017
 Source Schema         : hddatabase

 Target Server Type    : MongoDB
 Target Server Version : 30409
 File Encoding         : 65001

 Date: 13/02/2021 20:24:01
*/


// ----------------------------
// Collection structure for Employees
// ----------------------------
db.getCollection("Employees").drop();
db.createCollection("Employees");

// ----------------------------
// Documents of Employees
// ----------------------------
db.getCollection("Employees").insert([ {
    _id: ObjectId("6027be56b90d0000030019e6"),
    "employee_id": 1,
    "employee_name": "name",
    "employee_no": 1
} ]);

// ----------------------------
// Collection structure for employees
// ----------------------------
db.getCollection("employees").drop();
db.createCollection("employees");

// ----------------------------
// Documents of employees
// ----------------------------
db.getCollection("employees").insert([ {
    _id: ObjectId("6028a0bab464000076004a57"),
    id: "1",
    name: "John",
    no: "1",
    "updated_at": ISODate("2021-02-14T04:21:08Z"),
    "created_at": ISODate("2021-02-14T04:02:02Z")
} ]);
db.getCollection("employees").insert([ {
    _id: ObjectId("6028a320b464000076004a58"),
    id: "2",
    name: "Miche",
    no: "2",
    "updated_at": ISODate("2021-02-14T04:21:02Z"),
    "created_at": ISODate("2021-02-14T04:12:16Z")
} ]);
db.getCollection("employees").insert([ {
    _id: ObjectId("6028a4ad8c4a00002a004c82"),
    id: "3",
    name: "Angel",
    no: "3",
    "updated_at": ISODate("2021-02-14T04:19:24Z"),
    "created_at": ISODate("2021-02-14T04:18:53Z")
} ]);

// ----------------------------
// Collection structure for users
// ----------------------------
db.getCollection("users").drop();
db.createCollection("users");

// ----------------------------
// Documents of users
// ----------------------------
db.getCollection("users").insert([ {
    _id: ObjectId("6027e27efadd79a8b456480d"),
    name: "white",
    email: "whitenight@gmail.com",
    password: "dfadfadf",
    "api_token": "dfasdfasdfa"
} ]);
db.getCollection("users").insert([ {
    _id: ObjectId("6028989cb464000076004a52"),
    name: "dark horse",
    email: "dark@gmail.com",
    password: "$2y$10$XAfTjeH0AJkWWEZ5zhirHOkS0N45G6dKYjz7k08PeNX9KsszOfrqC",
    "updated_at": ISODate("2021-02-14T03:27:24Z"),
    "created_at": ISODate("2021-02-14T03:27:24Z")
} ]);
