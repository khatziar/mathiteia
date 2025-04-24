import sqlite3

# Connect to the SQLite database (or create it if it doesn't exist)
conn = sqlite3.connect('example.db')

# Create a cursor object
c = conn.cursor()

# Create the pelates table (if it doesn't exist)
c.execute('''
DROP TABLE if exists pelates;
          ''')
c.execute('''
CREATE TABLE IF NOT EXISTS pelates (
    id INTEGER PRIMARY KEY,
    name TEXT,
    description TEXT,
    price REAL,
    date_added TEXT
)
''')

# Data to be inserted
p = [
    (1, 'Plate A', 'Description A', 10.0, '2023-01-01'),
    (2, 'Plate B', 'Description B', 15.0, '2023-01-02'),
    (3, 'Plate C', 'Description C', 20.0, '2023-01-03')
]

# Insert multiple records using executemany
c.executemany("INSERT INTO pelates VALUES (?,?,?,?,?)", p)

# Commit the changes to the database
conn.commit()

# Query the database to verify the inserts
c.execute("SELECT * FROM pelates")
results = c.fetchall()
for row in results:
    print(row[2])

# Close the cursor and connection
c.close()
conn.close()
