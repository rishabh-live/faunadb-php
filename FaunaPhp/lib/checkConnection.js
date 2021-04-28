const faunadb = require("faunadb");
var args = process.argv.slice(2);
const faunaSecret = args[0];
const client = new faunadb.Client({ secret: faunaSecret });
console.log(client);