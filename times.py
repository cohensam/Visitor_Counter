#!/user/bin/python                                                              
import time
val = time.strftime("%a, %d %b %Y %H:%M:%S", time.localtime())
f = open('visited.txt', 'a')
f.write("%s\n" % (val))
f.close()
f = open('visited.txt', 'r')
for line in f:
    print line,
f.close()


