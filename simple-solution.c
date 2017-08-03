#include <linux/init.h>
#include <linux/module.h>
#include <linux/kernel.h>
#include <linux/list.h>
#include <linux/slab.h>

struct birthday {
   char *name;
   int day;
   int month;
   int year;
   struct list_head list;
}birthday;

LIST_HEAD(birthday_list);

int birthdayList_init(void)
{
   struct birthday *person;
struct birthday *ptr;
   printk(KERN_INFO "Loading Module...\n");


   person = kmalloc(sizeof(*person), GFP_KERNEL);
   person->name = "Alphonso";
   person->day = 2;
   person->month = 3;
   person->year = 1994;

   INIT_LIST_HEAD(&person->list);
   list_add_tail(&person->list, &birthday_list);

   person = kmalloc(sizeof(*person), GFP_KERNEL);
   person->name = "Joe";
   person->day = 8;
   person->month =7;
   person->year = 1998;

   INIT_LIST_HEAD(&person->list);
   list_add_tail(&person->list, &birthday_list);

   person = kmalloc(sizeof(*person), GFP_KERNEL);
   person->name = "Mark";
   person->day = 3;
   person->month = 11;
   person->year = 1987;

   INIT_LIST_HEAD(&person->list);
   list_add_tail(&person->list, &birthday_list);

   person = kmalloc(sizeof(*person), GFP_KERNEL);
   person->name = "Jeff";
   person->day = 6;
   person->month = 9;
   person->year = 1989;

   INIT_LIST_HEAD(&person->list);
   list_add_tail(&person->list, &birthday_list);

   person = kmalloc(sizeof(*person), GFP_KERNEL);
   person->name = "Phoebe";
   person->day = 6;
   person->month = 5;
   person->year = 1997;

   INIT_LIST_HEAD(&person->list);
   list_add_tail(&person->list, &birthday_list);

   printk(KERN_INFO "List Out of Order...\n");

   
   list_for_each_entry(ptr, &birthday_list, list)
   {
       printk(KERN_INFO "Birthday : Name: %s, Day: %d, Month: %d, Year: %d\n",
           ptr->name, ptr->day, ptr->month, ptr->year);
   }

   printk(KERN_INFO "Done...\n");

   return 0;
}


void birthdayList_exit(void)
{
   struct birthday *ptr, *nxt;
   printk(KERN_INFO "Removing\n");

   list_for_each_entry_safe(ptr, nxt, &birthday_list, list)
   {
       printk(KERN_INFO "Deleting : Name: %s, Day: %d, Month: %d, Year: %d\n",
           ptr->name, ptr->day, ptr->month, ptr->year);
       list_del(&ptr->list);
       kfree(ptr);
   }

   printk(KERN_INFO "free\n");
}

module_init(birthdayList_init);
module_exit(birthdayList_exit);

MODULE_LICENSE("VP");
MODULE_DESCRIPTION("Birthday List ");
MODULE_AUTHOR("Alphonso");