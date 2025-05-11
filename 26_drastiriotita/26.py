# from https://mathiteia.tpallas.net/intro.php
class metr(object):
    
    def __init__(self, counter):
        self.kato = 10
        self.ano = 20

        if counter >= self.kato and counter <= self.ano:
            self.__i = counter
        else:
            
            diafora_apo_ano = abs(self.ano - counter)
            diafora_apo_kato = abs(self.kato - counter)

            if diafora_apo_ano >= diafora_apo_kato:
                self.__i = self.kato
            else:
                self.__i = self.ano
    
    def auxisi(self):
        if self.__i + 1 <= self.ano:
            self.__i += 1
        
    def meiosi(self):
        if self.__i -1 >= self.kato:
            self.__i -= 1
    
    def printCounter(self):
        print "Counter: ", self.__i
        

# paradeigma 1
my_metr1 = metr(16)
my_metr1.auxisi()

my_metr1.printCounter()

# paradeigma 2
my_metr2 = metr(19)
my_metr2.meiosi()

my_metr2.printCounter()