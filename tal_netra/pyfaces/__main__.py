from pyfaces import pyfaces
import sys,time
import json

if __name__ == "__main__":
    try:
        start = time.time()
        argsnum=len(sys.argv)
        print "args:",argsnum
        if(argsnum<5):
            print "usage: "
            sys.exit(2)                
        imgname=sys.argv[1]
        dirname=sys.argv[2]
        egfaces=int(sys.argv[3])
        thrshld=float(sys.argv[4])
        pyf=pyfaces.PyFaces(imgname,dirname,egfaces,thrshld)
        end = time.time()
        print 'took :',(end-start),'secs'
	print json.load(selected_eigenfaces_count)
    except Exception,detail:
        print detail.args
	print "usage: "
