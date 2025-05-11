# from https://mathiteia.tpallas.net/intro.php
# Mathiteia - Python Askisi 27

class paral(object):
	def __init__(self, mikos, platos):

		if mikos < 0:
			self.mikos = 0
		else:
			self.mikos = mikos
		
		if platos < 0:
			self.platos = platos
		else:
			self.platos = platos
	
	def emvado(self):
		return self.platos * self.mikos
	

class pepipedo(paral):

	def __init__(self, mikos, platos, ypsos):

		super(pepipedo, self).__init__(mikos, platos)
		
		if ypsos < 0:
			self.ypsos = 0
		else:
			self.ypsos = ypsos
		
	def ogos(self):
		return self.emvado() * self.ypsos


my_cube = pepipedo(2, 3, 10)
print my_cube.ogos()