# from https://mathiteia.tpallas.net/intro.php
class roloi(object):
    
    def __init__(self, wr, lep, deft):
        if wr >= 0 and wr <= 23:
            self.wr = wr
        else:
            self.wr = 0
        if lep >= 0 and lep <= 59:
            self.lep = lep
        else:
            self.lep = 0
        if deft >= 0 and deft <= 59:
            self.deft = deft
        else:
            self.deft = 0
        
    def showtime(self):
        print str(self.wr) + ":" + str(self.lep) + ":" + str(self.deft)

    def totalseconds(self):
        return (self.wr*60*60 + self.lep*60 + self.deft)
    
    
myroloi = roloi(10, 26, 30)

myroloi.showtime()
print myroloi.totalseconds()