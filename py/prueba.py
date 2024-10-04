lista = [2,1,8,7,9,3,5]
print('lista original',lista)
lista.pop(5)
print('posición 5 eliminada',lista)
lista.append(0) ; lista.append(1) ; lista.append(3);
print('añado 0,1,3:',lista)
lista.sort()
print('Lista ordenada',lista)
print('máximo:',max(lista),'mínimo:',min(lista))
print('Suma:',sum(lista),'cantidad:',len(lista))
print('promedio:',sum(lista)/len(lista))
lista = []
print('Lista vacía',lista)