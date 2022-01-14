#!/usr/bin/python
def get_major(A):
    major=0
    for i in range(2):
        major+=A[i][i]
    return major

def get_minor(A):
    minor=A[0][1]*A[1][0]
    return minor


def determinent(A):
    major=get_major(A)
    minor=get_minor(A)
    return (major -minor)

def isDeterminent(major,minor):
    if(major-minor==0):
        return True
    return False

def find_polynomial(A):
    a=1
    b=0
    c=1
    for i in range(2):
       b+=-1*A[i][i]
       c*=A[i][i]
    c-=get_minor(A)
    return a,b,c

def eigenvalue(A):
    a,b,c=find_polynomial(A)
    '''
    TEST a,b,c係數
    print(a,b,c)
    '''
    x1=(-1*b+pow(b*b-4.0*a*c,0.5))/(2.0*a)
    x2=(-1*b-pow(b*b-4.0*a*c,0.5))/(2.0*a)
    return x1,x2

def swap(a,b):
    tmp=a
    a=b
    b=tmp
    return a,b

def eigenvector(A,a):
    B=[[0,0],[0,0]]
    for i in range(2):
        for j in range(2):
            B[i][j]=A[i][j]
    for i in range(2):
        B[i][i]-=a
    if(B[0][0]==0 and B[0][1]):
        B[0][0],B[1][0]=swap(B[0][0],B[1][0])
        B[0][1],B[1][1]=swap(B[0][1],B[1][1])
    if(B[0][0]==0):
        return[1,0]
    if(B[0][1]==0):
        return[0,1]
    return [-1*B[0][1]/B[0][0],1]
    
    
    '''
    如果matix沒有成簡化矩陣
    '''

def output(A):
    print(A)
    print("eigenvalues = ",eigenvalue(A))
    a,b=eigenvalue(A)
    print("a1 -> eigenvector = ",eigenvector(A, a))
    print("a2 -> eigenvector = ",eigenvector(A, b))
    print()
    return

def main():
    print("rrrrrrr")
    A=[[2,0],[0,-3]]
    B=[[1,6],[5,2]]
    C=[[7,2],[-4,1]]
    V=[[1,1],[1,1]]
    W=[[2,1],[0,2]]
    X=[[3,1],[-1,1]]
    #a1,a2是我的eigenvalues
    '''
    (2-x)*(-3-x)-0=0
    a1=(    pow(,0.5))/2
    '''
    '''
    Unit Test swap
    a=2
    b=3
    print(swap(a, b))
    '''
    output(A)
    output(B)
    output(C)
    output(V)
    output(W)
    output(X)
    return 0
main()
