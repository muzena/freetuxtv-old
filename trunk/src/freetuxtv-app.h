/* -*- Mode: C; indent-tabs-mode: t; c-basic-offset: 8; tab-width: 8-*- */
/*
 * freetuxtv
 * Copyright (C) FreetuxTV Team's 2008
 * Project homepage : http://code.google.com/p/freetuxtv/
 * 
 * freetuxtv is free software.
 * 
 */

#ifndef FREETUXTV_APP_H
#define FREETUXTV_APP_H

#include <gtk/gtk.h>
#include <glade/glade.h>

#include "freetuxtv-player.h"

G_BEGIN_DECLS

#define FREETUXTV_GLADEXML FREETUXTV_DIR "/freetuxtv.glade"

struct _FreetuxTVApp {
	
	gchar *name;

	GladeXML *windowmain;
	GladeXML *dialogaddgroup;
	GladeXML *windowminimode;

	FreetuxTVPlayer *player;
	GtkVBox *channelsgroups;
};
typedef struct _FreetuxTVApp FreetuxTVApp;

G_END_DECLS

#endif /* FREETUXTV_APP_H */