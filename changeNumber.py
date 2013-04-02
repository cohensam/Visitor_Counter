#!/usr/bin/python                                                               
f = open('visitors.txt', 'r+')
val = f.read()
f.close()
val = int(val)
val = val+1
val = str(val)
f = open('visitors.txt', 'w').close()
f = open('visitors.txt', 'w')
f.write(val)
f.close()
