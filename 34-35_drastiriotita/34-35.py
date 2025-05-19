# -*- coding: utf-8 -*-

from Tkinter import * # Εισαγωγή βιβλιοθήκης Tkinter Python 2.7!
import tkMessageBox

def changeStatefunction():
    state = e1['state']
    if state == 'normal':
        e1.configure(state='disabled')
    elif state == 'disabled':
        e1.configure(state='normal')

def printfunction():
    tkMessageBox.showinfo("Επάγγελμα", "Το επάγγελμα που πληκτρολογήσατε είναι: " + e1.get().encode('utf-8'))
        
def close_window():
    master.destroy() # κλείσιμο εφαρμογής
        
master = Tk() # Δημιουργία παραθύρου
l1 = Label(master, text='ΠΑΠΑΔΟΠΟΥΛΟΣ ΑΕ') # Καθορισμός Label.
l1.grid(row=0) # Εμφανίζεται στην πρώτη γραμμή και πρώτη στήλη.
l2 = Label(master, text='Επάγγελμα:')
l2.grid(row=1) # Εμφανίζεται στην δεύτερη γραμμή πρώτη στήλη
e1 = Entry(master) # Text input μιας γραμμής από τον χρήστη.
e1.grid(row=1, column=1) # Εμφανίζεται στην δεύτερη γραμμή και δεύτερη στήλη
b1=Button(master, text='Stop writing', command=changeStatefunction)
b1.grid(row=1, column=2)
b2=Button(master, text='Print', command=printfunction)
b2.grid(row=2, column=0)
b3=Button(master, text='Exit', command=close_window)
b3.grid(row=3, column=0)
mainloop() # συνάρτηση η οποία εμφανίζει το παράθυρο και το κρατάει ανοιχτό
