
const faunadb = require("faunadb");
var args = process.argv.slice(2);
const faunaSecret = args[0];
const client = new faunadb.Client({ secret: faunaSecret });
const q = faunadb.query;

async function run() {

    try {

        var result = await client.query(
            q.CreateDatabase({ name: args[1] })
        );
        console.log(result)
    } catch (e) {
        console.log(e);

    }
}

run();
