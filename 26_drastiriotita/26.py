# from https://mathiteia.tpallas.net/intro.php
class metr(object):
    
    def __init__(self, counter):
        self.kato = 10
        self.ano = 20

        if counter >= self.kato and counter <= self.ano:
            self.i = counter
        else:
            
            diafora_apo_ano = abs(self.ano - counter)
            diafora_apo_kato = abs(self.kato - counter)

            if diafora_apo_ano >= diafora_apo_kato:
                self.i = self.kato
            else:
                self.i = self.ano
    
    def auxisi(self):
        if self.i + 1 <= self.ano:
            self.i += 1
        
    def meiosi(self):
        if self.i -1 >= self.kato:
            self.i -= 1
    
    def printCounter(self):
        print "Counter: ", self.i
        

# paradeigma 1
my_metr1 = metr(16)
my_metr1.auxisi()

my_metr1.printCounter()

# paradeigma 2
my_metr2 = metr(19)
my_metr2.meiosi()

my_metr2.printCounter()

# paradeigma 3
my_metr3 = metr(32)
my_metr3.meiosi()

my_metr3.printCounter()