// 9-Dynamický zásobník.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <Windows.h>
typedef struct Stack{
	int data;
	struct Stack *prev;
}prvek;

prvek *pridej(prvek *zasobnik, int data)
{
	prvek *newEl = (prvek*)malloc(sizeof(prvek));
	newEl->prev = zasobnik;
	newEl->data = data;
	zasobnik = newEl;
	return zasobnik;
}
int vrchol(prvek *zasobnik)
{
	int value = zasobnik->data;
	return value;
}
prvek *odeber(prvek *zasobnik)
{
	prvek *delEl = (prvek*)malloc(sizeof(prvek));
	delEl = zasobnik;
	zasobnik = zasobnik->prev;
	free(delEl);
	return zasobnik;
}
int main()
{
	prvek *zasobnik = NULL;
	prvek *tmp = (prvek*)malloc(sizeof(prvek));
	for (int i = 0; i < 9; i++)
	{
		zasobnik=pridej(zasobnik, i);
	}
	printf("zasobnik>\n");
	tmp = zasobnik;
	while (tmp)
	{
		
		printf("%d\n", vrchol(tmp));
		tmp = tmp->prev;
	}
	free(tmp);
	printf("Vrchool zasobniku=%d",vrchol(zasobnik));
	printf("\nOdebrani prvku z vrcholu");
	zasobnik = odeber(zasobnik);
	tmp = zasobnik;
	printf("\nzasobnik>\n");
	while (tmp)
	{
		printf("%d\n", vrchol(tmp));
		tmp = tmp->prev;
	}
	free(tmp);
	free(zasobnik);
	system("pause");
    return 0;
}

