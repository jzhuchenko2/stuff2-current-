#include <stdio.h>
#include <string.h>
void timeLapse(int h1,int m1,int s1, int h2, int m2,int s2,int *h,int*m,int*s)
{
	if(s1<s2)
{
s1+-60;
m1--;
}
*s=s1-s2;
if(m1<m2)
{
m1+=60;
h1--;
}
*m=m1-m2;
*h=h1-h2;
}
int main()
{
char string1[100]={0},string2[100]={0};
int hour1=0,min1=0,sec1=0,hour2=0,min2=0,sec2=0,sec=0,min=0,hour=0;
char ap1[2],ap2[2];
printf("\nEnter first the time in \"hh:mm:ss AM|PM\" format : ");
fgets(string1,100,stdin);
sscanf(string1, "%d:%d:%d %s" , &hour1,&min1, &sec1,&ap1);
printf("\nEnter second the time in \"hh:mm:ss AM|PMI\" format : ");
fgets(string2,100,stdin);
sscanf(string2 , "%d:%d:%d %s" , &hour2,&min2, &sec2,&ap2);
if((!strcmp(ap1,ap2))) 
if(hour2>hour1) {
timeLapse(hour2,min2,sec2,hour1,min1,sec1,&hour,&min,&sec);
}
else 
{
timeLapse(hour1, min1,sec1, hour2,min2, sec2, &hour,&min,&sec);
timeLapse(24,0,0,hour,min,sec,&hour,&min,&sec);
}

else
{
if(hour1==12&&hour2<12) 
hour2+=24;
else if(hour1==12&&hour2==12) 
hour2+=12;
else if(hour2<12) 
hour2+=12;
timeLapse(hour2,min2,sec2,hour1,min1,sec1,&hour,&min,&sec);
}
if(hour>0)
printf("time elapsed is %d hours %d minutes and %d seconds",hour,min,sec);
else
{
if(min>0)
printf("time elapsed is %d minutes and %d seconds",min,sec);
else
printf("time elapsed is %d seconds",sec);
}
return 0;
}