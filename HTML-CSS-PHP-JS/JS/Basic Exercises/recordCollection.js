/* 
    Your function must always return the entire records object.
    If value is an empty string, delete the given prop property from the album.
    If prop isn't tracks and value isn't an empty string, assign the value to that album's prop.
    If prop is tracks and value isn't an empty string, you need to update the album's tracks array. 
    First, if the album does not have a tracks property, assign it an empty array. Then add the value 
    as the last item in the album's tracks array.
*/
const recordCollection = {
  2548: {
    albumTitle: "Slippery When Wet",
    artist: "Bon Jovi",
    tracks: ["Let It Rock", "You Give Love a Bad Name"],
  },
  2468: {
    albumTitle: "1999",
    artist: "Prince",
    tracks: ["1999", "Little Red Corvette"],
  },
  1245: {
    artist: "Robert Palmer",
    tracks: [],
  },
  5439: {
    albumTitle: "ABBA Gold",
  },
};

function updateRecords(records, id, prop, value) {
  if (value === "" || value === undefined) {
    //if value is 'empty'
    delete records[id][prop]; //delete given property
  } else if (prop !== "tracks" && value !== "") {
    //If prop isn't 'tracks' and value isn't an 'empty'
    records[id][prop] = value; //Add 'value' to that album's property
  } else if (prop === "tracks" && value !== "") {
    //If prop is 'tracks' and value isn't an 'empty'
    if (records[id].hasOwnProperty("tracks") === false) {
      //if the album does not have a tracks property, checks if it has a property
      records[id][prop] = []; //assign it an empty array
    }
    records[id][prop].push(value); //add the value as the last item
  }
  return records;
}

/*records = recordCollection
id = 'number' (ex: 5439)
prop = property (ex: 'tracks', 'artist')
value = to be inserted (ex: 'ABBA on "artist"')
*/

updateRecords(recordCollection, 5439, "artist", "ABBA");

updateRecords(recordCollection, 5439, "tracks", "Take a Chance on Me");

updateRecords(recordCollection, 2548, "artist", "");

updateRecords(recordCollection, 1245, "tracks", "Addicted to Love");

updateRecords(recordCollection, 2468, "tracks", "Free");

updateRecords(recordCollection, 2548, "tracks", "");

updateRecords(recordCollection, 1245, "albumTitle", "Riptide");

console.log(recordCollection);
