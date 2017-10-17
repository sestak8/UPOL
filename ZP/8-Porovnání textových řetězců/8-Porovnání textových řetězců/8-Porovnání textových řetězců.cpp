// 8-Porovnání textových řetězců.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <Windows.h>
int porovnej(char *t1, char *t2)
{
	for (int i=0; *t1 != '\0' || *t2 != '\0';t1++,t2++)
	{
		if (t1[i]<t2[i])return -1;
		else if (t1[i]>t2[i])return 1;
	}
	
	return 0;
	
}

int main()
{
	char r1[20], r2[20];
	printf("Prvni retezec:");
	scanf("%s", &r1);
	printf("\nDruhy retezec:");
	scanf("%s", &r2);
	char *p1=r1, *p2=r2;
	int res = porovnej(p1, p2);
	switch (res) {
		case 1:printf("\nSlovo '%s%' je vetsi nez '%s'\n",r1,r2); break;
		case -1:printf("\nSlovo '%s' je vetsi nez '%s'\n", r2, r1); break;
		case 0:printf("\nSlovo '%s' je shodny s '%s'\n",r1, r2); break;
	}
	system("pause");
    return 0;
}

