// 4-Prvočísla.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"


#include "stdafx.h"
#include <Windows.h>


int main()
{
	int n = 100;
	for (int i = 2, x; i < 100; i++)
	{
		x = 0;
		for (int j = 2; j < 100; j++)
		{
			if ((i%j == 0) && (i != j)) { break; }
			if (j == 99) { x = 1; }
		}
		if (x == 1) { printf("%d ", i); }
	}
	printf("\n");
	system("pause");
	return 0;
}
