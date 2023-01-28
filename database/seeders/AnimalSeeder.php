<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'img_path' => 'arctic-foxes',
            'img_path1' => 'arctic-foxes',
            'img_path2' => 'arctic-foxes',
            'name' => 'Arctic Foxes',
            'habitats_id' => '1',
            'desc' => 'The Arctic fox (Vulpes lagopus), also known as the white fox, polar fox, or snow fox, is a small fox native to the Arctic regions of the Northern Hemisphere and common throughout the Arctic tundra biome.[1][7][8] It is well adapted to living in cold environments, and is best known for its thick, warm fur that is also used as camouflage. It has a large and very fluffy tail. In the wild, most individuals do not live past their first year but some exceptional ones survive up to 11 years.[9] Its body length ranges from 46 to 68 cm (18 to 27 in), with a generally rounded body shape to minimize the escape of body heat.
            
            The Arctic fox preys on many small creatures such as lemmings, voles, ringed seal pups, fish, waterfowl, and seabirds. It also eats carrion, berries, seaweed, and insects and other small invertebrates. Arctic foxes form monogamous pairs during the breeding season and they stay together to raise their young in complex underground dens. Occasionally, other family members may assist in raising their young. Natural predators of the Arctic fox are golden eagles,[10] Arctic wolves, polar bears,[11] wolverines, red foxes, and grizzly bears.[12][13]',
            'long_desc' => 'Not far from the North Pole, the world is frozen for thousands of miles. Suddenly a snowy mound wiggles and reveals two dark eyes. The lump is transformed into the furry white body of a lone arctic fox. The canine casually shakes the blanket of snow off her thick coat—the key to her survival. But warm fur alone might not keep this fox alive during the polar winter, when temperatures rarely get above zero degrees Fahrenheit. Until spring arrives, this arctic fox will rely on some freeze-defying strategies, making it a champion of the cold.

            BUILT FOR THE ARCTIC
            Arctic foxes live on the land and sea ice within the Arctic Circle. Winter in the Arctic is unlike winter in most parts of the world. From October to February, the sun never rises to shine warmth and light.
            
            Luckily, these small foxes have some useful adaptations for living in the icy Arctic. Their thick fur coat keeps the fox’s body at a toasty 104°F. Their long, fluffy tails act like a blanket, keeping the fox warm when it wraps the tail around its body to sleep.
            
            Their feet also have a layer of thick fur, like built-in snow boots. This helps muffle an arctic fox’s footsteps, making it harder for prey to hear them. And their white coats make it difficult for predators such as wolves, polar bears, and golden eagles to spot them among the ice and snow.
            
            FINDING FOOD
            When it’s not trying to keep warm or avoid predators, an arctic fox is on the hunt for food. They prefer to eat small rodents called lemmings, but when times are tough they’ll eat whatever they can find: insects, berries, and even the droppings of other animals. Sometimes an arctic fox will follow a polar bear on a hunting trip and eat the bear’s leftovers.
            
            If a fox can’t find food, or if the weather gets really bad, it can dig a snow den and hunker down for up to two weeks. As long as a fox is warm, it can slow down its heart rate and metabolism, which helps the animal save energy so it doesn’t have to eat as much. It’s sort of like how bears hibernate, but for a shorter period of time.
            
            Once the animal emerges from its den, it’ll try to hunt again. With food in its belly, the arctic fox has a better chance of making it through another long, dark winter.',
            'founder_id' => '1',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'polar-bears',
            'img_path1' => 'polar-bears',
            'img_path2' => 'polar-bears',
            'name' => 'Polar Bears',
            'habitats_id' => '1',
            'desc' => 'The polar bear (Ursus maritimus) is a hypercarnivorous bear whose native range lies largely within the Arctic Circle, encompassing the Arctic Ocean, its surrounding seas and surrounding land masses. It is the largest extant bear species, as well as the largest extant land carnivore.[6][7] A boar (adult male) weighs around 350–700 kg (770–1,540 lb),[8] while a sow (adult female) is about half that size. Although it is the sister species of the brown bear,[9] it has evolved to occupy a narrower ecological niche, with many body characteristics adapted for cold temperatures, for moving across snow, ice and open water, and for hunting seals, which make up most of its diet.[10] Although most polar bears are born on land, they spend most of their time on the sea ice. Their scientific name means "maritime bear" and derives from this fact. Polar bears hunt their preferred food of seals from the edge of sea ice, often living off fat reserves when no sea ice is present. Because of their dependence on the sea ice, polar bears are classified as marine mammals.
            
            Because of expected habitat loss caused by climate change, the polar bear is classified as a vulnerable species. For decades, large-scale hunting raised international concern for the future of the species, but populations rebounded after controls and quotas began to take effect.[12] For thousands of years, the polar bear has been a key figure in the material, spiritual, and cultural life of circumpolar peoples, and polar bears remain important in their cultures. Historically, the polar bear has also been known as the "white bear".[13] It is sometimes referred to as the "nanook", based on the Inuit term nanuq.',
            'long_desc' => 'Not far from the North Pole, the world is frozen for thousands of miles. Suddenly a snowy mound wiggles and reveals two dark eyes. The lump is transformed into the furry white body of a lone arctic fox. The canine casually shakes the blanket of snow off her thick coat—the key to her survival. But warm fur alone might not keep this fox alive during the polar winter, when temperatures rarely get above zero degrees Fahrenheit. Until spring arrives, this arctic fox will rely on some freeze-defying strategies, making it a champion of the cold.

            BUILT FOR THE ARCTIC
            Arctic foxes live on the land and sea ice within the Arctic Circle. Winter in the Arctic is unlike winter in most parts of the world. From October to February, the sun never rises to shine warmth and light.
            
            Luckily, these small foxes have some useful adaptations for living in the icy Arctic. Their thick fur coat keeps the fox’s body at a toasty 104°F. Their long, fluffy tails act like a blanket, keeping the fox warm when it wraps the tail around its body to sleep.
            
            Their feet also have a layer of thick fur, like built-in snow boots. This helps muffle an arctic fox’s footsteps, making it harder for prey to hear them. And their white coats make it difficult for predators such as wolves, polar bears, and golden eagles to spot them among the ice and snow.
            
            FINDING FOOD
            When it’s not trying to keep warm or avoid predators, an arctic fox is on the hunt for food. They prefer to eat small rodents called lemmings, but when times are tough they’ll eat whatever they can find: insects, berries, and even the droppings of other animals. Sometimes an arctic fox will follow a polar bear on a hunting trip and eat the bear’s leftovers.
            
            If a fox can’t find food, or if the weather gets really bad, it can dig a snow den and hunker down for up to two weeks. As long as a fox is warm, it can slow down its heart rate and metabolism, which helps the animal save energy so it doesn’t have to eat as much. It’s sort of like how bears hibernate, but for a shorter period of time.
            
            Once the animal emerges from its den, it’ll try to hunt again. With food in its belly, the arctic fox has a better chance of making it through another long, dark winter.',
            'founder_id' => '2',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'gray-wolves',
            'img_path1' => 'gray-wolves',
            'img_path2' => 'gray-wolves',
            'name' => 'Gray Wolves',
            'habitats_id' => '1',
            'desc' => 'The wolf (Canis lupus;[b] pl: wolves), also known as the gray wolf or grey wolf, is a large canine native to Eurasia and North America. More than thirty subspecies of Canis lupus have been recognized, and gray wolves, as popularly understood, comprise wild subspecies. The wolf is the largest extant member of the family Canidae. It is also distinguished from other Canis species by its less pointed ears and muzzle, as well as a shorter torso and a longer tail. The wolf is nonetheless related closely enough to smaller Canis species, such as the coyote and the golden jackal, to produce fertile hybrids with them. The banded fur of a wolf is usually mottled white, brown, gray, and black, although subspecies in the arctic region may be nearly all white.
            
            Of all members of the genus Canis, the wolf is most specialized for cooperative game hunting as demonstrated by its physical adaptations to tackling large prey, its more social nature, and its highly advanced expressive behaviour including individual or group howling. It travels in nuclear families consisting of a mated pair accompanied by their offspring. Offspring may leave to form their own packs on the onset of sexual maturity and in response to competition for food within the pack. Wolves are also territorial and fights over territory are among the principal causes of wolf mortality. The wolf is mainly a carnivore and feeds on large wild hooved mammals as well as smaller animals, livestock, carrion, and garbage. Single wolves or mated pairs typically have higher success rates in hunting than do large packs. Pathogens and parasites, notably rabies virus, may infect wolves.',
            'long_desc' => 'Not far from the North Pole, the world is frozen for thousands of miles. Suddenly a snowy mound wiggles and reveals two dark eyes. The lump is transformed into the furry white body of a lone arctic fox. The canine casually shakes the blanket of snow off her thick coat—the key to her survival. But warm fur alone might not keep this fox alive during the polar winter, when temperatures rarely get above zero degrees Fahrenheit. Until spring arrives, this arctic fox will rely on some freeze-defying strategies, making it a champion of the cold.

            BUILT FOR THE ARCTIC
            Arctic foxes live on the land and sea ice within the Arctic Circle. Winter in the Arctic is unlike winter in most parts of the world. From October to February, the sun never rises to shine warmth and light.
            
            Luckily, these small foxes have some useful adaptations for living in the icy Arctic. Their thick fur coat keeps the fox’s body at a toasty 104°F. Their long, fluffy tails act like a blanket, keeping the fox warm when it wraps the tail around its body to sleep.
            
            Their feet also have a layer of thick fur, like built-in snow boots. This helps muffle an arctic fox’s footsteps, making it harder for prey to hear them. And their white coats make it difficult for predators such as wolves, polar bears, and golden eagles to spot them among the ice and snow.
            
            FINDING FOOD
            When it’s not trying to keep warm or avoid predators, an arctic fox is on the hunt for food. They prefer to eat small rodents called lemmings, but when times are tough they’ll eat whatever they can find: insects, berries, and even the droppings of other animals. Sometimes an arctic fox will follow a polar bear on a hunting trip and eat the bear’s leftovers.
            
            If a fox can’t find food, or if the weather gets really bad, it can dig a snow den and hunker down for up to two weeks. As long as a fox is warm, it can slow down its heart rate and metabolism, which helps the animal save energy so it doesn’t have to eat as much. It’s sort of like how bears hibernate, but for a shorter period of time.
            
            Once the animal emerges from its den, it’ll try to hunt again. With food in its belly, the arctic fox has a better chance of making it through another long, dark winter.',
            'founder_id' => '1',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'caribou',
            'img_path1' => 'caribou',
            'img_path2' => 'caribou',
            'name' => 'Caribou',
            'habitats_id' => '1',
            'desc' => 'Reindeer, known as caribou in North America, are deer in the genus Rangifer. Traditionally, reindeer were thought to be one species, Rangifer tarandus, with about ten subspecies. A recent revision of the genus elevated five of the subspecies to species (see Taxonomy). They have a circumpolar distribution and are native to the Arctic, sub-Arctic, tundra, boreal forest, and mountainous regions of northern Europe, Siberia, and North America.[2] Reindeer occur in both migratory and sedentary populations, and their herd sizes vary greatly in different geographic regions.
            
            Reindeer are unique among deer (Cervidae) in that females may have antlers, although the prevalence of antlered females varies by subspecies. The tundra subspecies are adapted for extreme cold, and some are adapted for long-distance migration.',
            'long_desc' => 'Not far from the North Pole, the world is frozen for thousands of miles. Suddenly a snowy mound wiggles and reveals two dark eyes. The lump is transformed into the furry white body of a lone arctic fox. The canine casually shakes the blanket of snow off her thick coat—the key to her survival. But warm fur alone might not keep this fox alive during the polar winter, when temperatures rarely get above zero degrees Fahrenheit. Until spring arrives, this arctic fox will rely on some freeze-defying strategies, making it a champion of the cold.

            BUILT FOR THE ARCTIC
            Arctic foxes live on the land and sea ice within the Arctic Circle. Winter in the Arctic is unlike winter in most parts of the world. From October to February, the sun never rises to shine warmth and light.
            
            Luckily, these small foxes have some useful adaptations for living in the icy Arctic. Their thick fur coat keeps the fox’s body at a toasty 104°F. Their long, fluffy tails act like a blanket, keeping the fox warm when it wraps the tail around its body to sleep.
            
            Their feet also have a layer of thick fur, like built-in snow boots. This helps muffle an arctic fox’s footsteps, making it harder for prey to hear them. And their white coats make it difficult for predators such as wolves, polar bears, and golden eagles to spot them among the ice and snow.
            
            FINDING FOOD
            When it’s not trying to keep warm or avoid predators, an arctic fox is on the hunt for food. They prefer to eat small rodents called lemmings, but when times are tough they’ll eat whatever they can find: insects, berries, and even the droppings of other animals. Sometimes an arctic fox will follow a polar bear on a hunting trip and eat the bear’s leftovers.
            
            If a fox can’t find food, or if the weather gets really bad, it can dig a snow den and hunker down for up to two weeks. As long as a fox is warm, it can slow down its heart rate and metabolism, which helps the animal save energy so it doesn’t have to eat as much. It’s sort of like how bears hibernate, but for a shorter period of time.
            
            Once the animal emerges from its den, it’ll try to hunt again. With food in its belly, the arctic fox has a better chance of making it through another long, dark winter.',
            'founder_id' => '1',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'snow-goose',
            'img_path1' => 'snow-goose',
            'img_path2' => 'snow-goose',
            'name' => 'Snow Goose',
            'habitats_id' => '1',
            'desc' => 'The snow goose (Anser caerulescens) is a species of goose native to North America. Both white and dark morphs exist, the latter often known as blue goose. Its name derives from the typically white plumage. The species was previously placed in the genus Chen, but is now typically included in the "gray goose" genus Anser.
            
            Snow geese breed north of the timberline in Greenland, Canada, Alaska, and the northeastern tip of Siberia, and spend winters in warm parts of North America from southwestern British Columbia through parts of the United States to Mexico.[4] Snow goose populations increased dramatically in the 20th century.',
            'long_desc' => 'Not far from the North Pole, the world is frozen for thousands of miles. Suddenly a snowy mound wiggles and reveals two dark eyes. The lump is transformed into the furry white body of a lone arctic fox. The canine casually shakes the blanket of snow off her thick coat—the key to her survival. But warm fur alone might not keep this fox alive during the polar winter, when temperatures rarely get above zero degrees Fahrenheit. Until spring arrives, this arctic fox will rely on some freeze-defying strategies, making it a champion of the cold.

            BUILT FOR THE ARCTIC
            Arctic foxes live on the land and sea ice within the Arctic Circle. Winter in the Arctic is unlike winter in most parts of the world. From October to February, the sun never rises to shine warmth and light.
            
            Luckily, these small foxes have some useful adaptations for living in the icy Arctic. Their thick fur coat keeps the fox’s body at a toasty 104°F. Their long, fluffy tails act like a blanket, keeping the fox warm when it wraps the tail around its body to sleep.
            
            Their feet also have a layer of thick fur, like built-in snow boots. This helps muffle an arctic fox’s footsteps, making it harder for prey to hear them. And their white coats make it difficult for predators such as wolves, polar bears, and golden eagles to spot them among the ice and snow.
            
            FINDING FOOD
            When it’s not trying to keep warm or avoid predators, an arctic fox is on the hunt for food. They prefer to eat small rodents called lemmings, but when times are tough they’ll eat whatever they can find: insects, berries, and even the droppings of other animals. Sometimes an arctic fox will follow a polar bear on a hunting trip and eat the bear’s leftovers.
            
            If a fox can’t find food, or if the weather gets really bad, it can dig a snow den and hunker down for up to two weeks. As long as a fox is warm, it can slow down its heart rate and metabolism, which helps the animal save energy so it doesn’t have to eat as much. It’s sort of like how bears hibernate, but for a shorter period of time.
            
            Once the animal emerges from its den, it’ll try to hunt again. With food in its belly, the arctic fox has a better chance of making it through another long, dark winter.',
            'founder_id' => '1',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'penguin',
            'img_path1' => 'penguin',
            'img_path2' => 'penguin',
            'name' => 'Penguin',
            'habitats_id' => '2',
            'desc' => 'Penguins (order Sphenisciformes /sfɪˈnɪsɪfɔːrmiːz/, family Spheniscidae /sfɪˈnɪsɪdiː/) are a group of aquatic flightless birds. They live almost exclusively in the Southern Hemisphere: only one species, the Galápagos penguin, is found north of the Equator. Highly adapted for life in the water, penguins have countershaded dark and white plumage and flippers for swimming. Most penguins feed on krill, fish, squid and other forms of sea life which they catch with their bills and swallow it whole while swimming. A penguin has a spiny tongue and powerful jaws to grip slippery prey.',
            'long_desc' => 'Penguins are flightless seabirds that live almost exclusively below the equator. Some island-dwellers can be found in warmer climates, but most—including emperor, adélie, chinstrap, and gentoo penguins—reside in and around icy Antarctica. A thick layer of blubber and tightly-packed, oily feathers are ideal for colder temperatures.

            The 18 different species of penguins can widely in shape and size but all have black bodies and white bellies. This protective countershading allows them to hide from predators like leopard seals and orcas while they swim.
            
            While penguins can’t fly, their stiff flippers, webbed feet, and sleek shape make them expert swimmers. In fact, they spend most of their lives in the ocean and do nearly all of their hunting for krill, squid, and crabs underwater. They can swim about 15 miles an hour, and when they want to go faster, they often porpoise, or leap out of the water as they swim.
            
            Life on land
            On land, penguins have an upright stance and tend to waddle, hop, or run with their bodies angled forward. Polar penguins can travel long distances quickly by “tobogganing,” or sliding across the ice on their bellies and pushing forward with their feet. If it’s especially cold, they huddle together in large colonies that protect them from predators and provide warmth. These colonies consist of thousands, and even millions, of penguins.
            
            Breeding
            Penguins come ashore to lay their eggs and raise their chicks. Most penguins stay with their mate for many years and lay only one or two eggs at a time. Parents take turns keeping their eggs warm, and when they hatch, feeding and protecting the chicks. For a few weeks each year, thousands of baby birds wait together while their parents forage for food. When mother and father return, chicks listen for the unique audio frequency of their parents’ call, allowing them to reunite in a large, noisy crowd.
            
            Soon after the chicks fledge, parents will begin molting. Unlike some birds that shed a few feathers at a time, penguins lose all their feathers at once during a process called catastrophic molt. They condense this process to just a few weeks because they must fast during this time—they can’t hunt without their waterproof feathers.
            
            Conservation and threats
            About two-thirds of penguin species are listed as threatened on the IUCN Red List, making them one of the most endangered seabirds. Loss of habitat, disease, and infectious diseases spread by tourists loom as threats. Commercial fishing in the Southern Ocean is also a significant concern, as it has reduced fish supply by about half in the Antarctic Peninsula. This forces many penguins to compete for food, and puts them in danger of getting accidentally captured by fishing nets.
            
            Among the biggest threats to penguin populations is climate change. Warming in the polar regions has melted sea ice, which penguins depend on to find food and build nests. Rapidly changing conditions mean Antarctica could lose most of its penguins to climate change by the end of the century. To survive, they may have to relocate to new habitats.',
            'founder_id' => '6',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'zebra',
            'img_path1' => 'zebra',
            'img_path2' => 'zebra',
            'name' => 'Zebra',
            'habitats_id' => '3',
            'desc' => 'Zebras stick together in herds. Within a herd, zebras tend to stay together in smaller family groups. Families are generally made up of a male, several females, and their young.',
            'long_desc' => 'Zebras stick together in herds. Within a herd, zebras tend to stay together in smaller family groups. Families are generally made up of a male, several females, and their young.

            As a zebra grazes, it uses its sharper front teeth to bite the grass, and then uses its duller back teeth to crush and grind. A zebras teeth keep growing for its entire life, because constant grazing and chewing wears them down.
            
            Zebras are constantly on the move to find fresh grass and water. Sometimes they gather in huge herds of thousands as they migrate to better feeding grounds. They often travel in mixed herds with other grazers and browsers, such as wildebeest.',
            'founder_id' => '7',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'camel',
            'img_path1' => 'camel',
            'img_path2' => 'camel',
            'name' => 'Camel',
            'habitats_id' => '4',
            'desc' => 'Bactrian camels have two humps on their backs where they store fat. Their nostrils close to block sand, and their bushy eyebrows and two rows of long eyelashes protect their eyes from blowing sand and ice.',
            'long_desc' => 'Arabian camels, called dromedaries, have only one hump, but both Arabian and Bactrian camels use their stored fat as energy and water when they are far away from food and a freshwater source.
            
            Arabian camels, called dromedaries, have only one hump, but both Arabian and Bactrian camels use their stored fat as energy and water when they are far away from food and a freshwater source.
            
            Camels move both legs on one side of the body forward at the same time, like giraffes and race horses. This is called pacing. Baby camels are born with their eyes open and can run when they are only a few hours old.

            The only truly wild camels that still exist are Bactrian camels. These herds survive in the Gobi desert of Mongolia and China, but number less than 400. They are critically endangered in the wild.',
            'founder_id' => '8',
            'kingdom' => 'Animalia'
        ]);

        Animal::create([
            'img_path' => 'jaguar',
            'img_path1' => 'jaguar',
            'img_path2' => 'jaguar',
            'name' => 'Jaguar',
            'habitats_id' => '5',
            'desc' => 'Jaguars are the only big cat in the Americas and the third biggest in the world after tigers and lions. They look a lot like leopards, which live in Africa and Asia, but jaguars’ spots are more complex and often have a dot in the center.',
            'long_desc' => 'Jaguars are the only big cat in the Americas and the third biggest in the world after tigers and lions. They look a lot like leopards, which live in Africa and Asia, but jaguars’ spots are more complex and often have a dot in the center.

            These powerful cats were worshipped as gods in many ancient South American cultures, and representations of the jaguar show up in the art and archaeology of pre-Columbian cultures across the jaguar’s range.
            
            Diet and behavior
            Unlike many other cats, jaguars do not avoid water. In fact, they are quite good swimmers. They hunt fish, turtles, and even caimans, using their incredibly powerful jaws to pierce the animals’ skulls. Jaguars also eat deer, peccaries, capybaras, tapirs, and a number of other land animals, which they prefer to ambush at night.
            
            Jaguars live alone, and they’re territorial—they define their area by marking with their waste or clawing trees.
            
            Females have litters of one to four cubs, which are blind and helpless at birth. The mother stays with them and defends them fiercely from any animal that may approach—even their own father. Young jaguars learn to hunt by living with their mothers for two years or more.
            
            Range and habitat
            Jaguars once roamed broadly from central Argentina all the way up to the southwestern United States. Since the 1880s, they’ve lost more than half their territory. Their main stronghold today is the Amazon Basin, though they still exist in smaller numbers through Central America as well.
            
            They’re typically found in tropical rainforests but also live in savannas and grasslands.
            
            Threats to survival
            Jaguars face a number of threats, including habitat fragmentation and illegal killing. South and Central America’s high rates of deforestation—for grazing land, agriculture, and other uses—have not only destroyed jaguars’ habitat but also broken it up. Fragmented forests mean that cats get boxed into patches of forest and can’t travel far to find new mates. That kind of isolation can lead to inbreeding and local extinctions.
            
            Another threat jaguars face is retaliatory killings from ranchers. As grazing land replaces forests, jaguars are more likely to hunt cattle. In response—and sometimes in anticipation—cattle owners kill jaguars.
            
            Poaching is another growing problem for jaguars. They’ve long been hunted for their pelts, and now there’s a growing illegal, international trade in jaguar teeth and jaguar bone products going to China.
            
            Conservation
            Jaguars are classified as near-threatened by the International Union for the Conservation of Nature. The species has national protections in almost every country it’s found, and trade in its parts is banned by CITES, a global treaty that regulates the cross-border wildlife trade. Still, poaching and the illegal trade continues so strengthening law enforcement is important.
            
            There are major efforts to support and develop jaguar corridors to connect isolated populations as well as to work with ranchers to reduce human-jaguar conflict. Workshops help ranchers learn better husbandry practices, and a growing number of programs compensate ranchers when they lose cattle to jaguars, so that they’re less motivated to kill the cat in retaliation.
            
            Fighting deforestation, which a number of international NGOs and indigenous groups are involved in, is critical.',
            'founder_id' => '9',
            'kingdom' => 'Animalia'
        ]);
    }
}
